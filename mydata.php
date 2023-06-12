<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <table class="table table-bordered">
        <thead>

            <tr>
                <th class="text-center">Image</th>
                <th class="text-center">First name</th>
                <th class="text-center">email</th>
                <th class="text-center">Update</th>
            </tr>

        </thead>
    <?php
    include 'connection.php';
    $sql = "SELECT * FROM `form`";

    
    $result = mysqli_query($conn,$sql);
    
    
    while($row = mysqli_fetch_assoc($result)){

    ?>
    <tbody>
        <td class="for_profile">
            <img src="<?php echo $row['image_location']; ?>" alt="">
        </td>
    <td>
    <?php echo $row['name']; ?>
    </td>
    <td>
    <?php echo $row['email']; 
    ?>
    </td>
    <td>
        <a href="update.php?id=<?php echo $row['id'] ?>">
       <button type="input">update</button>
    </a>
    </td>
    <td>
        <a href="delete.php?id=<?php echo $row['id'] ?>">
       <button type="input">Delete</button>
    </a>
    </td>
 
    </tbody>


    <?php } ?>
    
 




        </thead>
    </table>
    <div>
    <a href="index.php"><button>
    input Box
    </button></a>

    </div>
    
    <script>

    </script>
</body>

</html>