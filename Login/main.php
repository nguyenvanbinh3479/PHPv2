<?php include "../db/php-mysql.php"?>
<?php include "helper1.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/main_styles.css">
    <title>Main</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>List User</h1>
        </div>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php
                $sql = "select * from user";
                $result = $conn -> query($sql);
                $index = 0;
                if($result -> num_rows >0){
                    while($row = $result -> fetch_assoc()){?>
                        <tr>
                            <td><?php $index = increment_once($index); echo $index;?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><a href="Change.php?id=<?php echo $row['id'];?>">Edit</a></td>
                            <td><a href="delete1.php?id=<?php echo $row['id'];?>">Delete</a></td>
                        </tr>
                        <?php
                    }
                }else{
                    echo "0 results";
                }
                $conn -> close();
            ?>
            </tbody>
        </table>
        <a href="new.php"><input class='btn btn-primary' type="button" value="Create"></a>
    </div>
</body>
</html>