<?php

    // text
    echo "Hello World - Hello PHP!!!!! <br>";

    //biến
    //double
    $bien_double_1 = 2.2888800;
    $bien_double_2 = 2.2111200;
    $ket_qua = $bien_double_1 + $bien_double_2;
    print("$bien_double_1 + $bien_double_2 = $ket_qua <br>");  
    //bollean
    if (TRUE)
        print("Dòng văn bản này luôn luôn được in trên trình duyệt.<br>");

    else
        print("Dòng văn bản này sẽ không bao giờ được in trên trình duyệt.<br>");    
    //heredoc
    echo <<<END
    Ví dụ cú pháp "Here Document"
    trong PHP. Đây là một cú pháp
    rất hữu ích.
END;
    $x = <<<EOF
    Ví dụ minh họa cách trích dẫn "dấu nháy" trong PHP!
EOF;

    print $x;
    //hằng
    define("VIETJACK", 98);
   
   echo VIETJACK;
   echo constant("VIETJACK"); // Kết quả được in như lệnh echo bên trên

   // loop
   //swwich case
   $d=date("D");
         
         switch ($d)
         {
            case "Mon":
               echo "Hôm nay là Thứ Hai";
               break;
            
            case "Tue":
               echo "Hôm nay là Thứ Ba";
               break;
            
            case "Wed":
               echo "Hôm nay là Thứ Tư";
               break;
            
            case "Thu":
               echo "Hôm nay là Thứ Năm";
               break;
            
            case "Fri":
               echo "Hôm nay là Thứ Sáu";
               break;
            
            case "Sat":
               echo "Hôm nay là Thứ Bảy";
               break;
            
            case "Sun":
               echo "Hôm nay là Chủ Nhật";
               break;
            
            default:
               echo "Còn ngày này là thứ mấy ???";
         }
    //foreach
    $array = array( 1, 2, 3, 4, 5);
         
    foreach( $array as $value )
    {
       if( $value == 3 )continue;
       echo "Gia tri cua phan tu mang la $value <br />";
    }

    //array
    /* Phương thức thứ nhất để tạo mảng trong PHP. */
    $numbers = array( 1, 2, 3, 4, 5);
         
    foreach( $numbers as $value )
    {
       echo "Giá trị phần tử mảng là $value <br />";
    }
    
    /* Phương thức thứ hai để tạo mảng trong PHP. */
    $numbers[0] = "one";
    $numbers[1] = "two";
    $numbers[2] = "three";
    $numbers[3] = "four";
    $numbers[4] = "five";
    
    foreach( $numbers as $value )
    {
       echo "Giá trị phần tử mảng là $value <br />";
    }

     /* Phương thức thứ nhất để tạo mảng liên hợp. */
     $luong_nhan_vien = array("hoang" => 2000, "manh" => 1000, "huong" => 500);
         
     echo "Lương của nhân viên hoang là ". $luong_nhan_vien['hoang'] . "<br />";
     echo "Lương của nhân viên manh là ".  $luong_nhan_vien['manh']. "<br />";
     echo "Lương của nhân viên huong là ".  $luong_nhan_vien['huong']. "<br />";
     
     /* Phương thức thứ hai để tạo mảng liên hợp. */
     $luong_nhan_vien['hoang'] = "high";
     $luong_nhan_vien['manh'] = "medium";
     $luong_nhan_vien['huong'] = "low";
     
     echo "Mức lương của nhân viên hoang là ". $luong_nhan_vien['hoang'] . "<br />";
     echo "Mức lương của nhân viên manh là ".  $luong_nhan_vien['manh']. "<br />";
     echo "Mức lương của nhân viên huong là ".  $luong_nhan_vien['huong']. "<br />";

     //browser
     function getBrowser()
     { 
        $u_agent = $_SERVER['HTTP_USER_AGENT']; 
        $bname = 'Unknown';
        $platform = 'Unknown';
        $version= "";
        
        //Trước hết, chúng ta kiểm tra nền tảng platform
        if (preg_match('/linux/i', $u_agent)) {
           $platform = 'linux';
        }
        
        elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
           $platform = 'mac';
        }
        
        elseif (preg_match('/windows|win32/i', $u_agent)) {
           $platform = 'windows';
        }
        
        // Tiếp đó, lấy tên của User Agent
        if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
        {
           $bname = 'Internet Explorer';
           $ub = "MSIE";
        }
        
        elseif(preg_match('/Firefox/i',$u_agent))
        {
           $bname = 'Mozilla Firefox';
           $ub = "Firefox";
        }
        
        elseif(preg_match('/Chrome/i',$u_agent))
        {
           $bname = 'Google Chrome';
           $ub = "Chrome";
        }
        
        elseif(preg_match('/Safari/i',$u_agent))
        {
           $bname = 'Apple Safari';
           $ub = "Safari";
        }
        
        elseif(preg_match('/Opera/i',$u_agent))
        {
           $bname = 'Opera';
           $ub = "Opera";
        }
        
        elseif(preg_match('/Netscape/i',$u_agent))
        {
           $bname = 'Netscape';
           $ub = "Netscape";
        }
        
        // Cuối cùng, lấy tên của version
        $known = array('Version', $ub, 'other');
        $pattern = '#(?<browser>' . join('|', $known) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
        
        if (!preg_match_all($pattern, $u_agent, $matches)) {
           // nếu không có so khớp nào, tiếp tục ...
        }
        
        
        $i = count($matches['browser']);
        
        if ($i != 1) {
           
           
           //kiểm tra xem version là trước hay sau
           if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
              $version= $matches['version'][0];
           }
           else {
              $version= $matches['version'][1];
           }
        }
        else {
           $version= $matches['version'][0];
        }
        
        
        if ($version==null || $version=="") {$version="?";}
        return array(
           'userAgent' => $u_agent,
           'name'      => $bname,
           'version'   => $version,
           'platform'  => $platform,
           'pattern'   => $pattern
        );
     }
     
     //hiển thị kết quả
     $ua=getBrowser();
     $yourbrowser= "Your browser: " . $ua['name'] . " " . $ua['version'] . " on " .$ua['platform'] . " reports: <br >" . $ua['userAgent'];
     
     print_r($yourbrowser);

     //POST
     if ($_POST["name"] || $_POST["age"])
     {
         if(preg_match("/[^A-Za-z'-]/",$_POST["name"]))
         {
             die ("bien name khog hop le - nen la chu cai");
         }
         echo "Chào mừng ". $_POST['name']. "<br />";
        echo "Bạn ". $_POST['age']. " tuổi.";
      
         exit();
     }

     if( $_REQUEST["name"] || $_REQUEST["age"] )
   {
      echo "Chào mừng ". $_REQUEST['name']. "<br />";
      echo "Bạn ". $_REQUEST['age']. " tuổi.";
      exit();
   }
   //include
   include("");

   //file
   $filename = "tmp.txt";
   $file = fopen($filename, "r");
   if($file == false)
   {
       echo ("xảy ra lỗi khi mở file");
       exit();
   }

   $filesize = filesize($filename);
   $filetext = fread($file, $filesize);
   fclose($file);
   echo ( "Kích cỡ của file là: $filesize byte <br>" );
   echo ( "Dưới đây là nội dung của file: <br>" );
   echo ( "<pre>$filetext</pre>" ); 

   //ghi file
   $filename = "tmp.txt";
   $file = fopen( $filename, "w" );
   
   if( $file == false )
   {
      echo ( "Xảy ra lỗi khi mở file" );
      exit();
   }
   fwrite( $file, "Ví dụ ghi file trong PHP.\n" );
   fclose( $file );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>chọn trang web để truy cập</p>
    <form action="<?php $_SERVER['PHP_SELF']?>" method= "POST">
    <select name="location" id="">
        <option value="http://google.com">google</option>
        <option value="http://facebook.com">facebook</option>
    </select>
    <input type="submit">
    </form>

    <form action="<?php $_PHP_SELF ?>" method="POST">
         Họ tên: <input type="text" name="name" />
         Tuổi: <input type="text" name="age" />
         <input type="submit" />
      </form>

      <form action="<?php $_PHP_SELF ?>" method="POST">
         Họ tên: <input type="text" name="name" />
         Tuổi: <input type="text" name="age" />
         <input type="submit" />
      </form>
      <?php include("menu.php"); ?>
      <p>Ví dụ minh họa cách include file trong PHP!</p>


      <a href="http://nguyenvanbinh3479.github.io/">home</a>
    <a href="http://nguyenvanbinh3479.github.io/">help</a>
    <a href="http://nguyenvanbinh3479.github.io/">home</a>
    <a href="http://nguyenvanbinh3479.github.io/">help</a>
</body>
</html>