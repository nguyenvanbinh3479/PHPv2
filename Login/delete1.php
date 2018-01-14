<?php include "../db/php-mysql.php"?>
<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "delete from user where id=$id";
        if($conn -> query($sql) ===TRUE){
            echo "Delete successful ";
            echo "<a href='main.php'>Back</a>";
        }else{
            echo "Error deleting record: " . $conn->error;
        }
    }else{
        echo "You are hacker";
      }

?>