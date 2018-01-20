<!-- tinh giai thua -->
  <h1>tinh giai thua</h1>
    <?php
      function hamGiaiThua($n)
      {
        if($n == 0)
        {
          return 1;
        }
        else
        {
          return $n * hamGiaiThua($n - 1);
        }
      }
      echo "4! = " .hamGiaiThua(4). "<br>";
    ?>
<!-- kiem tra 1 so co phai so nguyen to khong -->
  <h1>kiem tra so nguyen to</h1>
    <?php
      function hamKiemTra($n)
      {
        for ($x = 2; $x < $n; $x++)
        {
          if($n % $x == 0)
          {
            return 0;
          }
        }
        return 1;
      }
      $a = hamKiemTra(3);
      if ($a ==0)
      {
        echo "day khong phai la so nguyen to";
      }
      else
      {
        echo "day la so nguyen to";
      }
    ?>
<!-- ham dao nguoc chuoi -->
  <h1>ham dao nguoc chuoi</h1>
    <?php
      function hamDaoNguoc($str1)
      {
        $n = strlen($str1);
        if ($n == 1)
        {
          return $str1;
        }
        else 
        {
          $n--;
          return hamDaoNguoc(substr($str1, 1, $n)). substr($str1, 0, 1);
        }
      }
      print_r(hamDaoNguoc("1234567"). "<br>");
    ?>
<!-- ham sap xem so nguyen -->
  <h1>ham sap xep so nguyen</h1>
    <?php
      function hamSapXep($a)
      {
        for ($x = 0; $x < count($a); ++$x)
        {
          $min = $x; 
          for ($y = $x + 1; $y < count($a); ++$y)
          {
            if ($a[$y] < $a[$min])
            {
              $temp = $a[$min];
              $a[$min] = $a[$y];
              $a[$y] = $temp;
            }
          }
        }
        return $a;
      }
      $a = array(51,14,1,21,"hj");
      print_r(hamSapXep($a));
    ?>
<!-- kiem tra ki tu trong chuoi co phai la chu thuong -->
  <h1>kiem tra chu thuong</h1>
    <?php
      function hamChuThuong($strl)
      {
        for ($sc = 0; $sc < strlen($strl); $sc++)
        {
          if (ord($strl[$sc]) >= ord("A") && ord($strl[$sc]) <= ord("Z"))
          {
            return false;
          }
        }
        return true;
      }
      var_dump(hamChuThuong("abc def ghi"));
      echo '<br>';
      var_dump(hamChuThuong("abc dEf ghi")); 
    ?>
<!-- kiem tra chuoi palindrome la chuoi doc xuoi nguoc deu nhu nhau -->
  <h1>chuoi palindrome</h1>
    <?php
      function hamPalindrome($string)
      {
        if ($string == strrev($string))
        {
          return $string ." is palindrome string";
        }
        else
        {
          return false;
        }
      }
      echo hamPalindrome('madam'). '<br>';
    ?>