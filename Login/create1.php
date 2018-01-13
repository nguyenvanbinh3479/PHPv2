<?php include "../db/php-mysql.php"?>
<?php

    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        if($password != $repassword){
            die('Password was not match  &nbsp <a href="new.php">Back</a>');
        }
        $sql = "insert into user(email,password) value('$email','$password')";
        if($conn -> query($sql) == TRUE){
            echo "New record created successfully ";
        }
        else{
            echo "Error: ". $sql ."<br>" .$conn -> error;
        }
        $conn -> close();
    }

?>