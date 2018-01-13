<?php include "../db/php-mysql.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/styles_login.css">
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
    <form class='form-login' action="" method='POST'>
        <div class="container">
            <div class="row">
                <h2 class='text-primary mb-3'>Login</h2>
            </div>
            <div class="row">
                <input class='form-control mb-3' type="text" placeholder='Email' name='email'>
            </div>
            <div class="row">
                <input class='form-control mb-3' type="text" placeholder='Password' name='password'>
            </div>
            <div class="row">
                <label class="mb-3"><input type="checkbox" value="remember" name="remember">&nbsp &nbsp Remember me</label>
            </div>
            <div class="row">
                <input class='btn btn-primary btn-block mb-3' type="submit" value='Sign Up'>
                <a href="#">forgot Password?</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                <a href="#">Create account</a>
            </div>
        </div>
    </form>
    </div>
</body>
</html>