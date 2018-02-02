
<?php
    $host = '127.0.0.1';
    $db = 'test';
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
//8
    // function getuser($conn){
    //     $sql = 'SELECT * FROM hocsinh';
    //     foreach ($conn->query($sql) as $row) {
    //       print "id = ". $row['id'] . "<br>";
    //       print "name = ". $row['name'] . "<br>";
    //       print "class = ". $row['class'] . "<br>";
    //       print "age = ". $row['age'] . "<br>";
    //     }
    //   }
    // getUser($pdo);
//9   
    // function getuser($pdo, $name, $age){
    //     $stmt = $pdo->prepare('SELECT * FROM hocsinh WHERE name = ? AND age = ?');
    //     $stmt->execute([$name, $age]);
    //     $users  = $stmt->fetch();
    //     print_r([$name]);
    //     print_r([$age]);
    //   }
    //   $name = 'binh';
    //   $age = '19';
    //   getuser($pdo, $name, $age);
//10
    // function binValue($pdo){
    //     $id = '3';
    //     $name = 'tuan';
    //     $class = '15cd';
    //     $sth = $pdo -> prepare('SELECT name, class, id from hocsinh where name = :name and class = :class and id = :id');
    //     $sth -> bindValue(':id', $id, PDO::PARAM_INT);
    //     $sth -> bindValue(':name', $name, PDO::PARAM_STR);
    //     $sth -> bindValue(':class', $class, PDO::PARAM_STR);
    //     $sth -> execute();
    //     $users  = $sth->fetch();
    //     print_r($users);
    // }
    // binValue($pdo);
//11
    // function binValue($pdo){
    //     $sth = $pdo -> prepare('SELECT * from hocsinh');
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
//12    
    // function binValue($pdo){
    //     $sth = $pdo -> prepare('SELECT * from hocsinh');
    //     $sth -> execute();
    //     $sh = $pdo -> prepare('SELECT * from hocsinh');
    //     $sh -> execute();
    //     $bt = $pdo -> prepare('SELECT * from hocsinh');
    //     $bt -> execute();
    //     print("fetch the first column from the first row in the result set:\n");
    //     print("Return next row as an array indexed by column name\n");
    //     $result = $sth -> fetchColumn();
    //     echo '<pre>';
    //     print_r("id = $result\n");
    //     echo '</pre>';        
    //     print("\n");
    //     $result = $bt -> fetchColumn(1);
    //     echo '<pre>';
    //     print_r("name = $result\n");
    //     echo '</pre>';        
    //     print("\n");
    //     $result = $sh -> fetchColumn(2);
    //     echo '<pre>';
    //     print_r("class = $result\n");
    //     echo '</pre>';        
    //     print("\n");
    //     $result = $sh -> fetchColumn(3);
    //     echo '<pre>';
    //     print_r("age = $result\n");
    //     echo '</pre>';        
    //     print("\n");
    // }
    // binValue($pdo);
//13
    // function binValue($pdo){
    //     $sth = $pdo -> prepare('SELECT id, name, age, class from hocsinh');
    //     $sth -> execute();
    //     print("fetch the first column from the first row in the result set:\n");
    //     print("Return next row as an array indexed by column name\n");
    //     $result = $sth -> fetchAll();
    //     echo '<pre>';
    //     print_r($result);
    //     echo '</pre>';        
    //     print("\n");
    // }
    // binValue($pdo);
//14
    // function binValue($pdo){
    //     $sth = $pdo -> prepare('SELECT id, name, class, age from hocsinh');
    //     $sth -> execute();
    //     $count = $sth -> rowCount();
    //     echo '<pre>';
    //     print_r($count);
    //     echo '</pre>';        
    //     print("\n");
    // }
    // binValue($pdo);
//15
    // function binValue($pdo){
    //     $sth = $pdo -> prepare('SELECT * from hocsinh WHERE name LIKE ?');
    //     $result = $sth -> execute(['%binh%']);
    //     echo '<pre>';
    //     print_r($result);
    //     echo '</pre>';        
    //     print("\n");
    // }
    // binValue($pdo);
//16
    // function binValue($pdo){
    //     $ids = [1,2,3];
    //     $inPlaceholders = str_repeat('?,', count($ids) - 1) . '?';
    //     $stmt = $pdo -> prepare("SELECT * from hocsinh where id IN ($inPlaceholders)");
    //     $result = $stmt -> execute($ids);
    //     echo '<pre>';
    //     print_r($result);
    //     echo '</pre>';        
    //     print("\n");
    // }
    // binValue($pdo);
//17
    try{
        $stmt = new PDO("mysql:host=$host;dbname=$db;charset=$charset");
        $stmt -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //sai cu phap
        $stmt -> prepare("SELECT name FORM hocsinh");
    }
    catch(PDOException $e){
        echo "ERROR! co loi vowi PDO";
        file_put_contents("PDOErrors.txt", $e -> getMessage(), FILE_APPEND);
    }
    
?>