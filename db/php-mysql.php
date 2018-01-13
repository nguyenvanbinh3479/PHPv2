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
    //tạo database
    // $sql = "create database php_mysql";
    // if(!mysqli_query($conn, $sql)){
    //     die('tạo thất bại');
    // }
    // echo 'tạo thành công';
    // echo 'kết nối thành công';
    //ngắt kết nối
    // mysqli_close($conn);

?>