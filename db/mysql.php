<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'mydb';

   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   if(! $conn )
   {
      die('Không thể kết nối: ' . mysql_error());
   }
   //echo 'Kết nối thành công';
   //mysqli_close($conn);
?>
