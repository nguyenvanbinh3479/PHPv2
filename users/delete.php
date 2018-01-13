<?php include "../db/mysql.php" ?>
<?php
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "delete from users where id=$id";
    if($conn->query($sql) === TRUE){
      echo "Delete successful";
      echo "<a href='index.php'>Back</a>";
    }else{
      echo "Error deleting record: " . $conn->error;
    }
  }else{
    echo "You are hacker";
  }
?>
