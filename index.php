
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<?php 
?>

    <div class="form-main">
        <div class="main-wrapper">
          <h2 class="form-head">Contact From</h2>
          <form class="form-wrapper" method="post" action="./from.php" enctype="multipart/form-data">
            <div class="form-card">
              <input
                class="form-input"
                type="text"
                name="name"
                required="required"
              />
              <label class="form-label" for="full_name">Full Name</label>
            </div>
  
            <div class="form-card">
              <input
                class="form-input"
                type="email"
                name="email"
                required="required"
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
          <a href="./mydata.php">
          <button  name="submit-form">
            Table
            </button></a>
        </div>
      </div>
    
    <?php 
    echo  $_FILES["image"]
    ?>
    
</body>
</html>