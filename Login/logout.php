<?php
  session_start();
  if(isset($_SESSION['$email'])){
    //logout
    unset($_SESSION['$email']);
  }
  echo "logout successful <a href = 'index.php'>Home</a>";
?>