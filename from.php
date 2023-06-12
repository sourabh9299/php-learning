<?php 
include ('connection.php');
if(isset($_POST['submit-form'])){
    $target_dir = "uploads/";

    $image_details = $target_dir.uniqid().basename($_FILES['image']['name']);

    // print_r($image_details);
    $name= $_POST["name"];
    $email= $_POST["email"];
    $image =$_FILES['image'];
    
    print_r($_FILES['image']);
    $query = "insert into `form` (`name`, `email`,`image_location` ) values ('$name', '$email','$image_details')";

    // print($query);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $image_details)) {
        echo "Image uploaded successfully!";
    } else {
        echo "Image upload failed!";
    }

    $reuslt= mysqli_query($conn, $query);
    if(!$reuslt){
        echo "alert('Data not inserted')";
    }
   
    else{
        header("location:index.php");
        // print_r($reuslt);
    }
    
}
?>