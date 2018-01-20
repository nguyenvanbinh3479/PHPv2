<!-- nam copyright -->
  <h1>nam copyright</h1>
    <p>@ <?php echo date('Y')?> copyright by Binhnguyen</p>
<!-- dem ngay den sinh nhat -->
  <h1>dem ngay den sinh nhat</h1>
    <?php
      $ngaySinhNhat = mktime(0,0,0,10,27,2018);
      $homnay = time();
      $hieuso = ($ngaySinhNhat - $homnay);
      $songay = (int)($hieuso/86400);
      print "con $songay nua la toi sinh nhat roi"; 
    ?>
<!-- in ngay theo dinh dang -->
  <h1>in ngay theo dinh dang</h1>
    <?php
      echo date("Y/m/d").'<br>';
      echo date("y.m.d").'<br>';
      echo date("d-m-y").'<br>';
    ?>
<!-- tinh khoang cach 2 ngay bat ky -->
  <h1>tinh khoang cach 2 ngay</h1>
    <?php
      $ngaydau = "1997-10-27";
      $ngaykt = "2018-1-20";
      $hieuso = abs(strtotime($ngaykt) - strtotime($ngaydau));
      $nam = floor($hieuso / (365 * 60 * 60 * 24));
      $thang = floor(($hieuso - $nam * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
      $ngay = floor(($hieuso - $nam * 365 * 60 * 60 * 24 - $thang * 30 * 60 * 60 * 24) / (60 * 60 *24));
      printf("%d nam, %d thang, %d ngay", $nam, $thang, $ngay);
    ?>