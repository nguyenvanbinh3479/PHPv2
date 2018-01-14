<?php include "../db/php-mysql.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/styles_login.css">
    <title>Change</title>
</head>
<body>
    <?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "select * from user where id = $id limit 1";
        $result = $conn -> query($sql);
        if($result -> num_rows > 0){
          $row = $result->fetch_assoc(); ?>
        <div class="wrapper">
        <form class="form-login" action="edit1.php" method="post">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <div class="container">/////
            <div class="row">
              <h1>Change User</h1>
            </div>
            <div class="row">
              <input class="form-control mt-3" type="text" placeholder="Email" name="email"
              value="<?php echo $row['email'] ?>" required>
            </div>
            <div class="row">
              <input class="form-control mt-3" type="password" placeholder="Password" name="password" value="<?php echo $row['password'] ?>" required>
            </div>
            <div class="row">
              <input class="form-control mt-3//////////////////" type="password" placeholder="Repassword" name="repassword" required>
            </div>
            <div class="row">
              <input class="btn btn-primary btn-block mt-3 mb-3" type="submit" value="Change" >
              <a href="main.php">Back</a>
            </div>
          </div>
         </form>
         </div>
  <?php
      }
    }
  ?>
</body>
</html>