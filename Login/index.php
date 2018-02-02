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
    <form class='form-login' action="login1.php" method='POST'>
        <div class="container">
            <div class="row">
                <h2 class='text-primary mb-3'>Login</h2>
            </div>
            <div class="row">
                <input class='form-control mb-3' type="text" placeholder='Email' name='email' required>
            </div>
            <div class="row">
                <input class='form-control mb-3' type="password" placeholder='Password' name='password' required>
            </div>
            <div class="row">
                <label class="mb-3"><input type="checkbox" value="remember" name="remember" checked ='checked'>&nbsp &nbsp Remember me</label>
            </div>
            <div class="row">
                <input class='btn btn-primary btn-block mb-3' type="submit" value='Sign Up'>
                <a href="#">forgot Password?</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                <a href="new.php">Create account</a>
            </div>
        </div>
    </form>
    </div>
</body>
</html>

<?php
    $host = '127.0.0.1';
    $db = 'test';
    $pass = '';
    $user = 'root';
    $charset = 'utf8';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,        
    ];
    $pdo = new PDO($dsn, $user, $pass, $opt);

    function getuser($conn){
        $sql = 'SELECT email FROM hocsinh';
        foreach ($conn->query($sql) as $row) {
          print $row['email'];
        }
      }
    // getUser($pdo);
    // function getUser($conn){
    //     $stmt = $pdo -> prepare('SELECT * FROM hocsinh where name = ? AND class = ?');
    //     $stmt -> execute([$name, $class]);
    //     $use = 
    // }
?>