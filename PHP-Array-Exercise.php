<!-- tao mang don gian -->
  <h2>tao mang</h2>
  <?php
    //khai bao mang
    $arr = array("white ", "blue ", "green ", "yellow ", "red ");
    //dung vong lap foreach de lap phan tu
    foreach($arr as $c){
      echo "$c";
    }
    //sap xep cac phan tu mang
    sort($arr);
    //in mang
    echo "<ul>";
    foreach($arr as $y){
      echo "<li>$y</li>";
    }
    echo "</ul>";
  ?>
<!-- tao mang lien hop -->
  <h2>mang lien hop</h2>
  <?php
    //khai bao mang
    $manglh =  array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg",  
      "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",  
      "Finland"=>"Helsinki", "France" => "Paris",  
      "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",  
      "Germany" => "Berlin", "Greece" => "Athens",  
      "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
      "Austria" => "Vienna", "Poland"=>"Warsaw");
    //sap xep mang
      asort($manglh);
    //lap phan tu mang
    foreach($manglh as $country => $capital)
    {
      echo "thu do cua $country la $capital" ."<br>";
    }
  ?>
<!-- xoa phan tu mang -->
  <h2>xoa phan tu mang</h2>    
  <?php
    $x = array(0,1,2,3,4);
    var_dump($x);
    echo '<br>';
    unset($x[3]);
    $x = array_values($x);
    echo '';
    var_dump($x);
    echo '<br>';
  ?>
<!-- lay phan tu dau tien trong mang -->
  <h2>lay phan tu dau tien</h2>
    <?php
      $color = array(1 => 'white', 5 => 'green', 9 => 'red');
      var_dump($color);
      echo '<br>';
      echo reset($color);
      echo '<br>';
    ?>
<!-- chen phan tu vao mang -->
  <h2>chen phan tu</h2>
    <?php
      $mbd = array('1','2','3','4','5');
      echo 'mang bat dau: <br>';
      foreach($mbd as $x)
      {
        echo "$x";
      } 
      echo '<br>';
      $ptcc = '$';
      array_splice($mbd, 3, 0, $ptcc);
      echo 'mang sau khi chen: <br>';
      foreach($mbd as $x)
      {
        echo "$x";
      }
    ?>
<!-- decode chuoi json -->
  <h2>decode chuoi json</h2>
    <?php
      function hamXuLy($value, $key)
      {
        echo "$key : $value <br>";
      }
      $a =  '{"Truong": "Dai Hoc Bon Ba",  
        "Khoa": "Tieng Lao nang cao",  
        "Nganh":  
        {   
          "Nganh 1": "Ngu Phap tieng Lao",
          "Nganh 2": "Giao tiep tieng Lao"
        }  
      }';  
      $j1 = json_decode($a,true);
      array_walk_recursive($j1,"hamXuLy");
    ?>
<!-- xap xep mang lien hop -->
  <h2>sap xep mang lien hop</h2>
    <?php
      echo "sap xep mang tang dan theo value <br>";
      $array1 = array("Hoang"=>"31","Nam"=>"41","Minh"=>"39","Hoa"=>"40") ;
      arsort($array1);
      foreach($array1 as $y => $y_value)
      {
        echo "tuoi cua: " .$y." la: ". $y_value."<br>";
      }
      echo "2. Sắp xếp tăng dần theo Key<br>";  
      $array3 = array("Hoang"=>"31","Nam"=>"41","Minh"=>"39","Hoa"=>"40"); 
      ksort($array3);  
      foreach($array3 as $y=>$y_value)  
      {  
        echo "Tuổi của ".$y." là: ".$y_value."<br>";  
      }  
      
      echo "3. Sắp xếp giảm dần theo Value<br>";  
      $age = array("Hoang"=>"31","Nam"=>"41","Minh"=>"39","Hoa"=>"40");  
      arsort($age);  
      foreach($age as $y=>$y_value)  
      {  
        echo "Tuổi của ".$y." là: ".$y_value."<br>";  
      }  
      
      echo "4. Sắp xếp giảm dần theo Key<br>";  
      $array4 = array("Hoang"=>"31","Nam"=>"41","Minh"=>"39","Hoa"=>"40"); 
      krsort($array4);  
      foreach($array4 as $y=>$y_value)  
      {  
        echo "Tuổi của ".$y." là: ".$y_value."<br>";  
		  }
    ?>
<!-- tim gia tri trung binh trong mang hien thi 5 phan tu nho nhat -->
  <h2>tim gia tri trung binh </h2>
    <?php
      $msn =  "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,  
        68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
      $mang_tam = explode(',', $msn);
      $tgt = 0;
      $ddm = count($mang_tam);
      foreach($mang_tam as $gt)
      {
        $tgt += $gt;
      }
      $gttb = $tgt/$ddm."";
      echo "gia tri trung binh: ".$gttb."";
      sort($mang_tam);
      echo "<br>liet ke 5 so nguyen nho nhat";
      for ($i = 0; $i < 5; $i++)
      {
        echo $mang_tam[$i].", ";
      }
      echo "<br>liet ke 5 so nguyen lon nhat";
      for ($i =($ddm - 5); $i < ($ddm); $i++)
      {
        echo $mang_tam[$i].", ";
      }
    ?>
<!-- hop 2 mang thanh 1 -->
  <h2>hop 2 mang thanh 1</h2>
    <?php
      $arrray = array(array(12, 37), array(21, 35));
      $arrray1 = array("binhnguyen","team");
      function hhmti($x, $y)
      {
        $temp = array(); $temp[] = $x;
        if(is_scalar($y))
        {
          $temp[] = $y;
        }
        else
        {
          foreach($y as $k => $v)
          {
            $temp[] = $v;
          }
        }
        return $temp;
      }
      echo '<pre>'; 
      print_r(array_map('hhmti', $arrray1, $arrray));
    ?>
<!-- chuyen doi chu hoa thanh chu thuong -->
  <h2>chuyen chu hoa thanh thuong</h2>
    <?php
      function hcd($input, $ucase)
      {
        $case = $ucase;
        $narray = array();
        if (!is_array($input))
        {
          return $narray;
        }
        foreach ($input as $key => $value)
        {
          if (is_array($value))
          {
            $narray[$key] = hcd($value, $case);
            continue;
          }
          $narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
        }
        return $narray;
      }
      $mang_ban_dau = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');  
      echo 'Mảng ban đầu: <br>';  
      print_r($mang_ban_dau);  
      echo '<br>Các giá trị ở dạng chữ thường.<br>';  
      $mang_dang_chu_thuong = hcd($mang_ban_dau,CASE_LOWER);  
      print_r($mang_dang_chu_thuong);  
      echo '<br>Các giá trị ở dạng chữ hoa.<br>';  
      $mang_dang_chu_hoa = hcd($mang_ban_dau,CASE_UPPER);  
      print_r($mang_dang_chu_hoa);
    ?>
<!-- tim do dai chuoi -->
  <h2>do dai chuoi</h2>
    <?php
      $mbd = array("abcd","abc","de","hjjj","g","wer");
      $mt = array_map("strlen", $mbd);
      //dung ham max min tim do dai
      echo "do dai ngan nhat: ". min($mt) . "<br>do dai dai nhat: ". max($mt);
    ?>
<!-- tim key lon nhat trong mang -->
  <h2>tim key lon nhat trong mang</h2>
    <?php
      $mlh = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",  
      "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",  
      "Finland"=>"Helsinki", "France" => "Paris",  
      "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",  
      "Germany" => "Berlin", "Greece" => "Athens",  
      "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
      "Austria" => "Vienna", "Poland"=>"Warsaw");
      $maxk = max(array_keys($mlh));
      echo $maxk;
    ?>
<!-- tim gia tri nho nhat trong mang -->
  <h2>tim gia tri nho nhat trong mang</h2>
    <?php
      function tgtnn(Array $value)
      {
        return min(array_diff(array_map('intval', $value), array(0)));
      }
      print_r(tgtnn(array(-1,0,1,12,-100,1)).'<br>');
    ?>
<!-- sap xep mang theo thu tu tu nhien khong phan biet kieu chu -->
  <h2>sap xep mang theo tu nhien</h2>
    <?php
      $colors = array("color1", "color20", "color3", "color2");
      sort($colors, SORT_NATURAL | SORT_FLAG_CASE);
      foreach ($colors as $key => $val)
      {
        echo "color[".$key."] = ". $val . "<br>";
      }
    ?>
