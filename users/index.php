<?php include "../db/mysql.php" ?>
<?php include "helper.php" ?>
<!DOCTYPE html>
<html>
<head>
  <title>List user</title>
  <link rel="stylesheet" href="../public/css/bootstrap.min.css">
  <link rel="stylesheet" href="../public/css/main.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <h1>List User</h1>
    </div>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Email</th>
          <th>#</th>
          <th>#</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $sql = "select * from users";
          $result = $conn->query($sql);
          $index = 0;
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) { ?>
              <tr>
                <td><?php $index = increment_once($index); echo $index; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
              </tr>
          <?php  }
          } else {
              echo "0 results";
          }
          $conn->close();
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
