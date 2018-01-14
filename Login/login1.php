<?php include "../db/php-mysql.php"?>
<?php
    
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "select email, password from user";     
            $query = $conn -> query($sql);
            if(mysqli_num_rows($query)){
                header('location: main.php');
            }
            else{
                echo "error";
            }
        }
    
?>  