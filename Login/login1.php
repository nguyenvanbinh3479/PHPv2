<?php include "../db/php-mysql.php"?>
<?php session_start()?>
<?php
    
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);
        //kiem tra co ton tai khong
        $query = mysqli_query($conn,"SELECT email, password FROM users WHERE email='$email'");
         //Kiểm tra email có đúng định dạng hay không
         if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/", $email)){
            echo "Email này không hợp lệ. Vui long nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }

        if(mysqli_num_rows($query) == 0){
            echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        //lay mat khau trong database
        $row = mysqli_fetch_array($query);
        //so sanh mat khau
        if($password != $row['password']){
            echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        //luu ten dang nhap
        $_SESSION['email'] = $email;
        
        $sql = "select email, password from users";     
            $query = $conn -> query($sql);
            if(mysqli_num_rows($query)){
                header('location: admin.php?c=home');
            }
            else{
                echo "error";
            }
        }
    
?>  