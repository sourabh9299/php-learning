<?php 

include ('./connection.php');
$id = $_GET['id'];

$data_name="SELECT `image_location` FROM `form` WHERE id = '$id'";

$result1 = mysqli_query($conn,$data_name);
$row = mysqli_fetch_assoc($result1);

$image_name = ($row['image_location']);
// echo $image_name;
$file_to_delete = $image_name;
unlink($file_to_delete);

 $sqlquerry = "DELETE FROM `form` WHERE id = '$id'";

$result = mysqli_query($conn,$sqlquerry);
 if (!$result){
    echo "failed";
 }

 else{
    header('Location:mydata.php');
 }
 
?>