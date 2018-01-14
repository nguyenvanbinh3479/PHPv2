<?php include "../db/php-mysql.php"?>
<?php
    
    if(isset($_POST['email']) && isset($_POST['password'])){
        if($_POST['email'] != $email && $_POST['password'] != $password){
            die('bạn nhập sai tên hoặc mật khẩu <a href = "index.php">Back</a> ');
        }
        echo 'đăng nhập thành công';
    }

?>