<!-- chuyen doi chu hoa thanh chu thuong -->
  <h1>chuyen doi chu hoa thanh chu thuong</h1>
    <?php
      echo strtoupper("bai tap php") . "<br>";
      echo strtolower("BAI TAP PHP") . "<br>";
      echo ucfirst("bai tap php") . "<br>";
      echo ucwords("bai tap php") . "<br>";
    ?>
<!-- chia 1 chuoi -->
  <h1>chia 1 chuoi</h1>
    <?php
      $str = '093521';
      echo substr(chunk_split($str, 2, ':'), 0, -1) . "<br>";
    ?>
<!-- kiem tra chuoi co chua chuoi nao khong -->
  <h1>kiem tra chuoi co chua chuoi nao khong</h1>
    <?php
      $str1 = "bai tap php";
      if (strpos($str1, 'bai') !== false)
      {
        echo 'chuoi da co chua chuoi \'bai\'.';
      }
      else
      {
        echo 'chuoi da cho khong chua chuoi \'bai\'.';
      }
    ?>
<!-- chuyen doi gia tri bien thanh chuoi -->
  <h1>chuyen doi gia tri bien thanh chuoi</h1>
    <?php
      $x = 20;
      $str2 = (string)$x;
      if ($str2 === $x)
      {
        echo "chung giong nhau <br>";
      }
      else
      {
        echo "chung khac nhau <br>";
      }
    ?>
<!-- lay username tu email -->
  <h1>lay username tu email</h1>
    <?php
      $diachimail = 'nguyenvanbinh3479@gmail.com';
      $user = strstr($diachimail, '@', true);
      echo $user .'<br';
    ?>