<?php
  /* CREATE TABLE */
    //connect
    $conn = new mysqli('localhost', 'root', '', 'php_news');
    // check connect
    if($conn -> connect_error){
      die("fail to connect");
    }
    else{
      //create table
      // $sql = "CREATE TABLE news(
      //   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      //   title VARCHAR(30) NOT NULL,
      //   content TEXT,
      //   add_date TIMESTAMP
      // )";
      // //query
      // if($conn -> query($sql) === TRUE){
      //   echo "create table successful";      
      // }
      // else{
      //   echo "fail to create table" . $conn -> error;
      // }
  /* INSERT DATA */
      // $sqli = "INSERT INTO news(title, content)
      //   VALUE ('title124', 'content124');";
      // $sqli .= "INSERT INTO news(title, content)
      //   VALUE ('title123', 'content123');";
      // //query multi record
      // if($conn -> multi_query($sqli) === TRUE){
      //   //get id
      //   $last_id = $conn ->insert_id;
      //   echo "add record successful, id $last_id";
      // }
      // else{
      //   echo "fail to add record";
      // }  
  /* PREPARED */
      // //sql
      // $sqlii = "INSERT INTO news(title, content) VALUES (?, ?)";    
      // //create object repared
      // $stmt = $conn -> prepare($sqlii);
      // //assign value to parameter
      // $stmt -> bind_param("ss", $title, $content);
      // //query
      // $title = 'title0';
      // $content = 'content0';
      // $stmt -> execute();
      // echo "add successful";
      // //disconnect
      // $stmt -> close();
  /* SELECT DATA */
      // //get list
      // $sql = "SELECT id, title, content FROM news";
      // //query
      // $result = $conn -> query($sql);
      // //check
      // if($result -> num_rows > 0){
      //   //loop result
      //   while($row = $result -> fetch_assoc()){
      //     echo "title: " .$row["title"]. " - content: ".$row["content"]."<br>";
      //   }              
      // }
      // else{
      //   echo "not have anny record";
      // }
  /* DELETE DATA */
      // //sql
      // $sql = "DELETE FROM news WHERE id = 1";
      // //query
      //   if($conn -> query($sql) === TRUE){
      //     echo "delete successful";
      //   }
      //   else{
      //     echo "delete fail". $conn -> error;
      //   }
  /* UPDATE DATA */
      //sql
      $sql = "UPDATE news SET title = 'new' WHERE id = 2";
      //query
      if($conn -> query($sql) ===TRUE){
        echo "update successful";
      } 
      else{
        echo "fail to update";
      }
      //disconnect
      $conn -> close();
    }
?>