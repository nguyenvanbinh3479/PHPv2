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
<!-- lay 3 ky tu cuoi cua 1 chuoi -->
  <h1>lay 3 ky tu cuoi cua 1 chuoi</h1>
    <?php
      $str3 = "hello there";
      echo substr($str3, -3).'<br>';
    ?>
<!-- thay the tu dau tien trong chuoi bang tu khac -->
  <h1>thay the tu dau tien trong chuoi bang tu khac</h1>
    <?php
      $str = 'bai tap php va nang cao';
      echo preg_replace('/bai/', "thuc",$str, 1).'<br>';
    ?>
<!-- xoa 1 phan bat dau tu dau chuoi -->
  <h1>xoa 1 phan bat dau tu dau chuoi</h1>
    <?php
      $chuoicon = 'binhnguyen';
      $chuoibandau = "binhnguyenno1@gmail.com";
      if (substr($chuoibandau, 0, strlen($chuoicon)) == $chuoicon)
      {
        $chuoibandau = substr($chuoibandau, strlen($chuoicon));
      }
      echo $chuoibandau, '<br>';
    ?>
<!-- chen chuoi vao vi tri bat ki -->
  <h1>chen chuoi vao vi tri bat ki</h1>
    <?php
      $chuoibd = 'bai tap php ';
      $chuoicanchen = 'nang cao';
      $insertpos = 12;
      $chuoimoi = substr_replace($chuoibd, $chuoicanchen, $insertpos, 0);
      echo $chuoimoi. '<br>';
    ?>
<!-- lay tu dau tien trong 1 cau -->
  <h1>lay tu dau tien trong 1 cau</h1>
    <?php
      $str = 'bai tap php';
      $arr1 = explode(' ', trim($str));
      echo $arr1[0].'<br>';
    ?>