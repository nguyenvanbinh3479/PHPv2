<?php

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'php_mysql';
    //kết nối
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if(!$conn){
        die('không thể kết nối: ' . mysql_error());
    }
    echo 'kết nối thành công';
    //ngắt kết nối
    mysqli_close($conn);

?>