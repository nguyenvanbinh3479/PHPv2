<?php include "../db/mysql.php" ?>
<!DOCTYPE html>
<html>
<head>
  <title>Update User</title>
  <link rel="stylesheet" href="../public/css/bootstrap.min.css">
  <link rel="stylesheet" href="../public/css/styles.css">
</head>
<body>
  <?php
    if(isset($_GET['id'])){
      $id = $_GET['id'];
      $sql = "select * from user where id=$id limit 1";
      $result = $conn->query($sql);
      if($result->num_rows > 0){
        $row = $result->fetch_assoc(); ?>
        <div class="wrapper">
        <form class="form-login" action="update.php" method="post">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <div class="container">
            <div class="row">
              <h1>Update User</h1>
            </div>
            <div class="row">
              <input class="form-control mt-2" type="text" placeholder="Email" name="email"
              value="<?php echo $row['email'] ?>">
            </div>
            <div class="row">
              <input class="form-control mt-2" type="password" placeholder="Password" name="password" value="<?php echo $row['password'] ?>">
            </div>
            <div class="row">
              <input class="form-control mt-2" type="password" placeholder="Repassword" name="repassword">
            </div>
            <div class="row">
              <input class="btn btn-primary mt-2" type="submit" value="Submit">
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
