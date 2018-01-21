<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/js/bootstrap.min.js">
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
      <h2>mang php</h2>
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
  <!-- lay cau hinh va phien ban -->
    <?php 
      // phpinfo();
    ?>
  <!-- in 1 chuoi cho truoc -->
    <h2>in 1 chuoi</h2>
    <?php
      echo "Hoc php co ban va nang cao";  
    ?>    
  <!-- tao form dang nhap hien thi ten dang nhap -->
    <form method='POST'>
    <h2>Nhap ten dang nhap:</h2>
      <input type="text" name="name" placeholder='Name'>
      <input type="submit" value="submit">
    </form>  
    <?php
      if(isset($_POST['name'])){
        $name = addslashes($_POST['name']);
        echo "ten dang nhap cua ban la "."<strong>$name</strong";
      }
    ?>
  <!-- lay dia chi ip khach hang -->
    <h2>lay dia chi ip khach hang</h2>
    <?php
      //check from iternet
      if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
      }
      //check from proxy
      else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
      }
      //check from remote
      else{
        $ip_address = $_SERVER['REMOTE_ADDR'];
      }
      echo "dia chi ip la $ip_address <br>";
    ?>
  <!-- lay thong tin trinh duyet -->
    <?php
      echo "<h2>thong ti trinh dyuet dang dung la </h2><br>". $_SERVER['HTTP_USER_AGENT'];
    ?>
  <!-- lay file luu code php -->
  <h2>lay ten file</h2>
    <?php
      $tenFile = basename($_SERVER['PHP_SELF']);
      echo "ten file la: $tenFile <br>";
    ?>
  <!-- lay thanh phan trong url -->
      <h2>lay thanh phan trong url</h2>
    <?php
      $url = 'http://binh.com/bai-tap-php/bai-tap-php/lay-url-trong-php.jsp';
      $url = parse_url($url);
      echo 'Scheme: ' . $url['scheme']. "<br>";
      echo 'Host: ' . $url['host'] . "<br>";
      echo 'Path: ' . $url['path'] . "<br>";
    ?>
  <!-- doi mau ki tu dau tien -->
  <h2>doi mau ki tu dau tien</h2>
    <?php
      $text = 'Binh Nguyen';
      $text = preg_replace('/(\b[a-z])/i', '<span style="color: red;">\1</span>',$text);
      echo $text ."<br>";
    ?>
  <!-- kiem tra http hay https -->
    <h2>http or https</h2>
    <?php
      if(!empty($_POST['HTTPS'])){
        echo 'trang duoc goi tu https <br>';
      }
      else{
        echo 'trang duoc goi tu http';
      }
    ?>
  <!-- chuyen nguoi dung den 1 trang moi -->
    <h2>chuyen den trang moi</h2>
    <form method='post'>
      <input type="submit" name = 'go' value='Google'>
    </form>
    <?php
      if(isset($_POST['go'])){
        header("location: http://google.com");
      }
    ?>
  <!-- kiem tra email -->
    <h2>kiem tra email</h2>
    <form method="post">
      <input type="text" name ="eml" placeholder="email">
      <input type="submit" name ="sm">
    </form>
    <?php
      if(isset($_POST['eml'])){
        $eml = $_POST['eml'];
        if(filter_var($eml, FILTER_VALIDATE_EMAIL)){
          echo '"' . $eml . '" = hop le' . "<br>";
        }
        else{
          echo '"' . $eml . '" = khong hop le' . "<br>";
        }
      }
    ?>
  <!-- tao bang -->
    <h2>table</h2>
    <form method="post">
      <input type="text" name="ml" placeholder="email">
      <input type="submit" name="smt" value="submit">
    </form>
    <table class="table table-hover" style="max-width: 500px;">
    <thead>
      <tr class="table-danger">
        <th>ID</th>
        <th>Email</th>
        <th>Name</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $id = 0;
      function increment_once($id){
        $id++;
        return $id;
      }

      if(isset($_POST['ml'])){
        $ml = $_POST['ml'];
        $ml1 = 0;
      }  ?>
      <tr class="table-info">
        <td><?php $id = increment_once($id); echo $id;?></td>
        <td><?php echo $ml?></td>
        <td><?php echo strstr($ml, '@', true)?></td>
      </tr>
    </tbody>
    </table>
  <!-- source code cua trang web -->
    <h2>source code</h2>
      <?php
        $line = file('Login/helper1.php');
        foreach($line as $line_num => $line){
          echo "dong thu {$line_num}: " . htmlspecialchars($line). "<br>";
        } 
      ?>
  <!-- lay thong tin last modified -->
    <h2>last modified</h2>
        <?php
          $fht = basename($_SERVER['PHP_SELF']);
          $flm = filemtime($fht);
          echo 'last modified' . date('l, dS, F, Y, h:ia', $flm). '<br>';
        ?>
  <!-- dem so daong file -->
    <h2>dem so dong file</h2>
    <?php
      $file = basename($_SERVER['PHP_SELF']);
      $dong = count(file($file));
      echo "co $dong dong trong $file";
    ?>
  <!-- phien ban php -->
    <h2>phien ban php</h2>
    <?php
      echo "phien ban php hien tai: ". phpversion();
    ?>
  <!-- thuc thi chuong trinh trong khaong thoi gian -->
    <h2>thuc thi chuong trinh</h2>
    <?php
      echo date('h:i:s').'<br>';
      sleep(3);
      echo date('h:i:s').'<br>';      
    ?>
  <!-- kiem tra 1 so lon hon 10 15 or 20 -->
    <h2>toan tu tam phan</h2>
    <form method="post">
      nhap n = <input type="text" name="n" style="width: 50px;">
      <input type="submit" name="msm" value="submit">
    </form>
    <?php
      if(isset($_POST['n'])){
        $n = $_POST['n'];
        $r = $n > 20 ? "lon hon 20" : ($n > 15 ? "lon hon 15" : ($n > 10 ? "lon hon 10" : "nho hon 10"));
        echo $n . " : ". $r .'<br>';
      }
    ?>
  <!-- lay thu muc goc -->
    <h2>lay thu muc</h2>
      <?php
        $rd = getenv('DOCUMENT_ROOT');
        echo $rd . '<br>';
      ?>
  <!-- lay thong tin he dieu hanh -->
    <h2>he dieu hanh</h2>
    <?php
      echo php_uname() . "<br>";
      echo PHP_OS. "<br>";
      if(strtoupper(substr(PHP_OS, 0, 3)) === 'WIN'){
        echo'Server dang use window';
      }
      else{
        echo 'day khong phai la server dung winddow';
      }
    ?>
  <!-- hien thi cac so khoang 200 - 250 chia het cho 4 -->
    <h2>so chia het cho 4</h2>
    <?php
      echo implode(",",range(200,250,4))."<br>";
    ?>
</body>
</html>