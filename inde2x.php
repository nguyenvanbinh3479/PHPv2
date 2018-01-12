<?php
    if(isset($_GET['mail']) && isset($_GET['pass'])){  
        $email =$_GET['mail'];
        $pass =$_GET['pass'];
        echo "email: $email và password: $pass";
    }
?>