<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $result = '';
        if(isset($_POST['calculator'])){
            //lấy thông tin
            $a = isset($_POST['a']) ? (float)trim($_POST['a']) : '';
            $b = isset($_POST['b']) ? (float)trim($_POST['b']) : '';
            //xác thực thông tin
            if($a == ''){
                $result = 'bạn chưa nhập số a';
            }
            else if($b == ''){
                $result = 'bạn chưa nhập số b';
            }
            else if($a == 0){
                $result = 'số a phải khác 0';
            }
            else{
                $result = -($b) / $a;
            }
        }
    ?>
    <h1>giải phương trình bậc nhất</h1>
    <form action="" method='POST'>
        <input type="text" name='a' style='width: 20px' value=''> x +
        <input type="text" name='b' style='width: 20px' value=''> = 0
        <input type="submit" name='calculator' value='Tính'>
    </form>
    <?php
        echo $result;
    ?>
</body>
</html>