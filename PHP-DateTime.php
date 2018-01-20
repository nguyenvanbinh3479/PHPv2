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
<!-- doi dinh dang ngay thang -->
  <h1>doi dinh dang ngay thang</h1>
  <?php
    $dinh_dang_cu = "2016-09-29";  
		$dinh_dang_moi = date("d-m-Y", strtotime($dinh_dang_cu));  
		echo "Định dạng cũ: " .$dinh_dang_cu."<br>";
		echo "Định dạng mới: " .$dinh_dang_moi."<br>";
  ?>
<!-- doi ngay thang thanh timestamp -->
  <h1>doi ngay thang thanh timestamp</h1>
    <?php
      $timestamp = strtotime('12-05-2016');  
		  echo $timestamp."<br>";
    ?>
<!-- lay ngay dau tien va cuoi cua 1 thang -->
  <h1>lay ngay dau tien va cuoi cua 1 thang</h1>
    <?php
      $dt = "2018-01-20";  
      echo 'Ngày đầu tháng: '. date("Y-m-01", strtotime($dt)).' - Ngày
      cuối tháng: '. date("Y-m-t", strtotime($dt));
    ?>
<!-- in ngay thang tieng anh -->
  <h1>in ngay thang tieng anh</h1>
    <?php
      echo date('l \t\h\e jS');
    ?>
<!-- kiem tra ngay da cho hop le khong -->
  <h1>kiem tra ngay da cho hop le khong</h1>
    <?php
      var_dump(checkdate(2, 30, 2008));  
      echo "<br>";
      var_dump(checkdate(2, 29, 2008));
    ?>
<!-- chuyen thang so thanh thang chu -->
  <h1>chuyen thang so thanh thang chu</h1>
    <?php
      $ten_dang_so = 9;  
      $ten_dang_chu = date("F", mktime(0, 0, 0, $ten_dang_so, 10));  
      echo $ten_dang_chu."<br>";
    ?>
<!-- lay ngay thang cua hom qua -->
  <h1>lay ngay thang cua hom qua</h1>
    <?php
      //ngày hôm nay
	    echo date('F j, Y');
      echo "<br>";
      //lấy thời gian ngày hôm qua
      $dt = new DateTime();  
      $dt->sub(new DateInterval('P1D'));  
      echo $dt->format('F j, Y')."<br>";
    ?>
<!-- timezone -->
  <h1>timezone</h1>
    <?php
      date_default_timezone_set('America/Los_Angeles');  
      $date = date('m/d/Y h:i:s a', time());  
      echo $date;
      //or
      ini_set('date.timezone','America/New_York');   
		  echo '<p>'.date("g:i A").'</p>'."<br>";
    ?>
<!-- kiem tra co phai cuoi tuan ko -->
  <h1>kiem tra co phai cuoi tuan ko</h1>
    <?php
      $dt='2018-1-20';  
      $dt1 = strtotime($dt);  
      $dt2 = date("l", $dt1);  
      $dt3 = strtolower($dt2);  
      if(($dt3 == "saturday" )|| ($dt3 == "sunday"))  
      {  
        echo $dt. ' là vào ' .$dt3.' tức là ngày cuối tuần'."<br>";  
      }   
      else  
      {  
        echo $dt. ' là vào ' .$dt3.' tức là không phải là ngày cuối tuần'."<br>";  
      }
    ?>
<!-- cong tru 1 ngay tu ngay da chon -->
  <h1>cong tru 1 ngay tu ngay da chon</h1>
    <?php
      $dt='2018-1-20';  
      echo 'Ngày ban đầu: '.$dt."<br>";  
      $so_ngay = 35;  
      $bdate = strtotime("-".$so_ngay." days", strtotime($dt));  
      $adate = strtotime("+".$so_ngay." days", strtotime($dt));  
      echo 'Ngày trước 35 ngày là: '.date("Y-m-d", $bdate)."<br>";  
      echo 'Ngày sau 35 ngày là: '.date("Y-m-d", $adate)."<br>";
    ?>
<!-- chuyen giay thanh ngay gio phut giay -->
   <h1>chuyen giay thanh ngay gio phut giay</h1>
     <?php
        function ham_chuyen_doi($so_giay)   
        {  
          $dt1 = new DateTime("@0");  
          $dt2 = new DateTime("@$so_giay");  
          return $dt1->diff($dt2)->format('%a ngày, %h giờ, %i phút và %s giây');  
        }  
        echo ham_chuyen_doi(200000)."<br>";
     ?>