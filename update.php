<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Update</title>

</head>

<body>


    <div class="form-main">
        <div class="main-wrapper">
            <h2 class="form-head">Contact From</h2>
            
            <?php
    include 'connection.php';
    $sql = "SELECT * FROM `form`";

    
    $result = mysqli_query($conn,$sql);
    
    
    while($row = mysqli_fetch_assoc($result)){

    ?>
   <form class="form-wrapper" method="post" action="./from.php" enctype="multipart/form-data">
            <div class="form-card">
              <input
                class="form-input"
                type="text"
                name="name"
                required="required"
                value=" <?php echo $row['name']; ?>"
              />
              <label class="form-label" for="full_name">Full Name</label>
            </div>
  
            <div class="form-card">
              <input
                class="form-input"
                type="email"
                name="email"
                required="required"
               value=" <?php echo $row['email']; ?>"
              />
              <label class="form-label" for="email">Email</label>
            </div>
  
            <div class="form-card">
              <input
                class="form-input"
                type="file"
                name="image"
                required="required"
                
              />
              <label class="form-label" for="phone_number"></label>
            </div>
            <button type="submit" name="submit-form">
            Submit
            </button>
           
            
  
           
          </form>
          


    <?php } ?>
            <a href="./mydata.php">
                <button name="submit-form">
                    Table
                </button>
            </a>
        </div>
    </div>

</body>

</html>