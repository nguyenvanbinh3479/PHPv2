<?php include "../db/php-mysql.php"?>
<?php

    if(isset($_POST['id']) && isset($_POST['email']) 
    && isset($_POST['password']) && isset($_POST['repassword'])){
        $id = $_POST['id'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        if($password != $repassword){
            die('Password was not match');
        }

        $sql = "update user set email='$email', password='$password' where id=$id";
        if($conn -> query($sql) === TRUE){
            echo "new record created successfully <a href='main.php'>Login</a>";
        }else{
            echo "Error: ". $sql ."<br>".$conn -> error;
        }
        $conn -> close();
    }

?>