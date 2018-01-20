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