<?php
  session_start();
  if(isset($_SESSION['$email'])){
    unset($_SESSION['$email']);
    echo "logout successful <a>Home</a>";
  }
?>