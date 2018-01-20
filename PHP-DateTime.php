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