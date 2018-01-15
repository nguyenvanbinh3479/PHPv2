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
  <!-- Giai phuong trinh bac 2 -->
    <?php 
      $result = '';
      if(isset($_POST['calculate'])){
        //get parameters
        $a = isset($_POST['a']) ? $_POST['a'] : '';
        $b = isset($_POST['b']) ? $_POST['b'] : '';
        $c = isset($_POST['c']) ? $_POST['c'] : '';
        //validate
        $delta = ($b * $b) - (4* $a *$c);
        if($delta < 0){
          $result = "phuong trinh vo nghiem";
        }
        else if($delta ==0){
         $result = "phuong trinh co nghiem kep x1 = x2 = ".(-$b/ 2* $a);
        }
        else{
         $result = 'phuong trinh co hai nghiem phan biet, x1 = '.((-$b + sqrt($delta))/2*$a);
         $result .= " , x2 = ". ((-$b - sqrt($delta))/2*$a);
        }
      }
    ?>
    <h1>giai phuong trinh bac 2</h1>
    <form action="" method="POST">
      <input type="text" style="width: 20px;" name="a" value=""> x <sup> 2 </sup> +
      <input type="text" style="width: 20px;" name="b" value=""> x  +
      <input type="text" style="width: 20px;" name="b" value=""> =  0<br><br>
      <input type="submit" name="calculate" value='tinh'>
    </form>
    <?php echo $result; ?>
  <!-- duyet tung phan tu cua mang -->
    <?php
      $author = array(
       array(
         'name' => 'nguyen van binh',
         'blog' => 'bl.net',
         'position' => 'admin'
        ),
       array(
         'name' => 'nguyen van hao',
         'blog' => 'bl.net',
         'position' => 'admin'
        ),
        array(
         'name' => 'nguyen van nam',
         'blog' => 'bl.net',
         'position' => 'admin'
        ),
       );
      echo '<ul>';
      foreach($author as $key => $author){
       echo '<li>';
       echo 'name: ' .$author['name'].'<br>';
       echo 'blog: ' .$author['blog'].'<br>';
       echo 'position: ' .$author['position'].'<br>';
       echo '</li>';
      }
      echo '</ul>';
    ?>
  <!-- truy suat en phan tu trong mang -->
    <!-- <?php
      $value = $array[$key];
      $vanhao = $author[1];
      $name = $vanhao['name'];
      $name = $author[1]['name'];
      echo $name;
    ?>     -->
  <!-- them phan tu vao mang -->
    <?php
      $array[] = 'value';
      array_push($array, 'value');
      $array[$key] = 'value';  
    ?>
  <!-- xoa phan tu khoi mang -->
  <?php 
   unset($author[1])
   ?>
</body>
</html>