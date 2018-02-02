
<?php
    $host = '127.0.0.1';
    $db = 'php_mysql';
    $pass = '';
    $user = 'root';
    $charset = 'utf8';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,        
    ];
    $pdo = new PDO($dsn, $user, $pass, $opt);

    // function getuser($conn){
    //     $sql = 'SELECT email FROM user';
    //     foreach ($conn->query($sql) as $row) {
    //       print $row['email'];
    //     }
    //   }
    // getUser($pdo);
    // function getuser($pdo, $email){
    //     $stmt = $pdo->prepare('SELECT * FROM user WHERE email = ?');
    //     $stmt->execute([$email]);
    //     $users  = $stmt->fetch();
    //     print_r([$email]);
    //   }
    //   $email = 'nguyenvanbinh3479@gmail.com';
    //   getuser($pdo, $email);
    // function binValue($pdo){
    //     $email = 'nguyenvanbinh3790@gmail.com';
    //     $sth = $pdo -> prepare('SELECT email from user where email = :email');
    //     $sth -> bindValue(':email', $email, PDO::PARAM_INT);
    //     $sth -> execute();
    //     $users  = $sth->fetch();
    //     print_r($users);
    // }
    // binValue($pdo);

    // function binValue($pdo){
    //     $sth = $pdo -> prepare('SELECT * from user');
    //     $sth -> execute();
    //     print("PDO::FETCH_ASSOC: ");
    //     print("Return next row as an array indexed by column name\n");
    //     $result = $sth -> fetch(PDO::FETCH_ASSOC);
    //     echo '<pre>';
    //     print_r($result);
    //     echo '</pre>';        
    //     print("\n");
    // }
    // binValue($pdo);
    
    // function binValue($pdo){
    //     $sth = $pdo -> prepare('SELECT * from user');
    //     $sth -> execute();
    //     $sh = $pdo -> prepare('SELECT * from user');
    //     $sh -> execute();
    //     $bt = $pdo -> prepare('SELECT * from user');
    //     $bt -> execute();
    //     print("fetch the first column from the first row in the result set:\n");
    //     print("Return next row as an array indexed by column email\n");
    //     $result = $sth -> fetchColumn();
    //     echo '<pre>';
    //     print_r("id = $result\n");
    //     echo '</pre>';        
    //     print("\n");

    //     $result = $bt -> fetchColumn(1);
    //     echo '<pre>';
    //     print_r("email = $result\n");
    //     echo '</pre>';        
    //     print("\n");

        
    //     $result = $sh -> fetchColumn(2);
    //     echo '<pre>';
    //     print_r("email = $result\n");
    //     echo '</pre>';        
    //     print("\n");
    // }
    // binValue($pdo);

    // function binValue($pdo){
    //     $sth = $pdo -> prepare('SELECT id, email, password from user');
    //     $sth -> execute();
    //     print("fetch the first column from the first row in the result set:\n");
    //     print("Return next row as an array indexed by column email\n");
    //     $result = $sth -> fetchAll();
    //     echo '<pre>';
    //     print_r($result);
    //     echo '</pre>';        
    //     print("\n");
    // }
    // binValue($pdo);

    // function binValue($pdo){
    //     $sth = $pdo -> prepare('SELECT id, email, password from user');
    //     $sth -> execute();
    //     $count = $sth -> rowCount();
    //     echo '<pre>';
    //     print_r($count);
    //     echo '</pre>';        
    //     print("\n");
    // }
    // binValue($pdo);

    // function binValue($pdo){
    //     $sth = $pdo -> prepare('SELECT id, email, password from user');
    //     $sth -> execute();
    //     print("fetch the first column from the first row in the result set:\n");
    //     print("Return next row as an array indexed by column email\n");
    //     $result = $sth -> fetchAll();
    //     echo '<pre>';
    //     print_r($result);
    //     echo '</pre>';        
    //     print("\n");
    // }
    // binValue($pdo);

    // function binValue($pdo){
    //     $sth = $pdo -> prepare('SELECT * from user WHERE email LIKE ?');
    //     $result = $sth -> execute(['%binh%']);
    //     echo '<pre>';
    //     print_r($result);
    //     echo '</pre>';        
    //     print("\n");
    // }
    // binValue($pdo);

    // function binValue($pdo){
    //     $ids = [27,28,29];
    //     $inPlaceholders = str_repeat('?,', count($ids) - 1) . '?';
    //     $sth = $pdo -> prepare('SELECT * from user where id IN ($inPlaceholders)');
    //     $result = $sth -> execute([$ids]);
    //     echo '<pre>';
    //     print_r($result);
    //     echo '</pre>';        
    //     print("\n");
    // }
    // binValue($pdo);
    
?>