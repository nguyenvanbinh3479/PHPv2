<?php  include 'test.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style type="text/css">
    form {
        width: 500px;
        margin: 50px auto;
        padding: 20px;
        border: 5px solid #000;
        border-radius: 10px;
        text-align: center;
    }
    h1{
        margin: -43px auto;
        background: #fff;
        width: 300px;    
        width: 300px;
    }
    .form{
        margin: 100px auto 50px;
    }
    input{
        margin-bottom: 20px;
    }
    select{
        margin-left: 52px;
        margin-bottom: 20px;
        width: 173px;
    }
    .one{
        margin-left: 16px;
    }
    .three{
        margin-left: 62px;
    }
    .input{
        margin-left: 10px;
    }
</style>
<body>
    <form method="post">
        <h1>Sample Calculator</h1>
        <div class="form">
        First Number: <input class="one" type="text" name="a" value="<?php echo $a; ?>" required><br>
        Opertor: <select name='c'>
        <option>null</option>        
        <option>+</option>
        <option>-</option>
        </select><br>
        Second Number: <input class="two" type="text" name="b" value="<?php echo $b; ?>" required><br>
        Result: <input class="three" type="text" name="result" value="<?php echo $result; ?>"><br>
        <input class="input" type="submit" value="Caculate" name="submit">
        </div>
    </form>
</body>
</html> 