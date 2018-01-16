<?php include "../db/php-mysql.php"?>
<?php

    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);
        $repassword = addslashes($_POST['repassword']);
              
        //Kiểm tra tên đăng nhập này đã có người dùng chưa
        if (mysqli_num_rows(mysqli_query($conn, "SELECT email FROM user WHERE email='$email'")) > 0){
            echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        //Kiểm tra email có đúng định dạng hay không
        if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/", $email)){
            echo "Email này không hợp lệ. Vui long nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
 
        //kiem tra repass dung chua 
        if($password != $repassword){
            die('Password was not match  &nbsp <a href="new.php">Back</a>');
        }
        $sql = "insert into user(email,password) value('$email','$password')";
        if($conn -> query($sql) == TRUE){
            header('location: main.php');
        }
        else{
            echo "Error: ". $sql ."<br>" .$conn -> error;
        }
        $conn -> close();
    }

?>