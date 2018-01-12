<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="../public/css/bootstrap.min.css">
  <link rel="stylesheet" href="../public/css/main.css">
</head>
<body>
  <div class="wrapper">
  <form class="form-login" action="create.php" method="post">
    <div class="container">
      <div class="row">
        <h1>New User</h1>
      </div>
      <div class="row">
        <input class="form-control mt-2" type="text" placeholder="Email" name="email">
      </div>
      <div class="row">
        <input class="form-control mt-2" type="password" placeholder="Password" name="password">
      </div>
      <div class="row">
        <input class="form-control mt-2" type="password" placeholder="Password" name="repassword">
      </div>
      <div class="row">
        <input class="btn btn-primary mt-2" type="submit" value="Submit">
      </div>
    </div>
   </form>
   </div>
</body>
</html>
