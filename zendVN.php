<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- date -->
    <link rel="stylesheet" href="public/css/jquery-ui.css">
    <script src="public/js/jquery-3.3.1.min.js"></script>
    <script src="public/js/jquery-ui.js"></script>
		<title>Document</title>
	</head>
	<body>
		<div class="content">
			<!-- hien thi tung trang -->
      <div class="container">
        <ul class="pagination">
          <li><a href="zendVN.php?page=1">1</a></li>
          <li><a href="zendVN.php?page=2">2</a></li>
          <li><a href="zendVN.php?page=3">3</a></li>
          <li><a href="zendVN.php?page=4">4</a></li>
          <li><a href="zendVN.php?page=5">5</a></li>
          <li><a href="zendVN.php?page=6">6</a></li>
          <li><a href="zendVN.php?page=7">7</a></li>
          <li><a href="zendVN.php?page=8">8</a></li>
          <li><a href="zendVN.php?page=9">9</a></li>
          <li><a href="zendVN.php?page=10">10</a></li>
        </ul>
      </div>
      <div class="result">
				<?php
						$result = '';
						if(isset($_GET['page']))
						{
						  $page = $_GET['page'];
							switch($page)
							{
                case '1':?>
                <!-- may tinh --><?php
                  $act = 'active';
                  $a = ''; 
                  $b = '';
                  $c = '';
                  $flag = true;
                  $tt = true;
                  if (isset($_POST['a']) && isset($_POST['c']) && isset($_POST['b']))
                  {
                    $a = $_POST['a'];
                    $b = $_POST['b'];
                    $c = $_POST['c'];
                    if (is_numeric($a) && is_numeric($b))
                    {
                      switch($c)
                      {
                        case "+":
                          $result = $a + $b;
                        break;
                        case "-":
                          $result = $a - $b;
                        break;
                        case "*":
                          $result = $a * $b;
                        break;
                        case "x":
                          $result = $a * $b;
                        break;
                        case "/":
                          $result = $a / $b;
                        break;
                        case ":":
                          $result = $a / $b;
                        break;
                        case "%":
                          $result = $a % $b;
                        break;
                        default:
                          $result = "vui long nhap phep toan";
                          $tt= false;
                        break;
                      }	
                    }
                    else
                    {
                      $result = "vui long nhap so";
                      $flag = false;
                    }
                  }?>
                  <form method="post" style="border: 1px solid black; width: 550px; margin: 10px auto; padding: 20px; text-align: center; font-weight: bold">
                      <h1 style="color: red;">mo phong may tinh dien tu</h1>
                      So thu nhat: <input type="text" name="a" value="<?php echo $a?>" required><br><br><br>
                      Phep toan: <input type="text" name="c" value="<?php echo $c?>" required><br><br><br>
                      So thu hai: <input type="text" name="b" value="<?php echo $b?>" required><br><br><br>
                      <input type="submit" value="Xem ket qua" name="submit">
                  </form>
                  <h4 style="text-align: center;">
                      <?php 
                        if ($flag == true && $tt == true)
                        {
                          echo "Ket Qua: " . $a ." ".$c. " ".$b." = ". $result ;
                        }
                        else{
                          echo $result;
                        }
                      ?>
                  </h4><?php
								break;
								case '2':?>
								<!-- doan chom sao --><?php
                  $ngay ='';
                  $thang ='';
                  $image = '';
                  $time = '';
					        if(isset($_POST['ngay']) && isset($_POST['thang']))
                  {
                    $ngay = $_POST['ngay'];
                    $thang = $_POST['thang'];
                    if(is_numeric($ngay) && is_numeric($thang))
                    {
                      if($ngay <= 31 && $thang <= 12)
                      {
                        switch($thang)
                        {
                          case 1:
                            if ($ngay <= 19)
                            {
                              $image = 'maket';
                              $time = "23/12 - 19/1";
                            }
                            if ($ngay >= 20)
                            {
                              $image = 'baobinh';
                              $time = "20/1 - 19/2";
                            }
                          break;
                          case 2:
                            if ($ngay <= 19)
                            {
                              $image = 'baobinh';
                              $time = "20/1 - 19/2";
                            }
                            if ($ngay >= 20)
                            {
                              $image = 'songngu';
                              $time = "20/2 - 21/3";
                            }
                          break;
                          case 3:
                            if ($ngay <= 21)
                            {
                              $image = 'songngu';
                              $time = "20/2 - 21/3";
                            }
                            if ($ngay >= 22)
                            {
                              $image = 'bachduong';
                              $time = "22/3 - 20/4";
                            }
                          break;
                          case 4:
                            if ($ngay <= 20)
                            {
                              $image = 'bachduong';
                              $time = "22/3 - 20/4";
                            }
                            if ($ngay >= 21)
                            {
                              $image = 'kimnguu';
                              $time = "21/4 - 21/5";
                            }
                          break;
                          case 5:
                            if ($ngay <= 21)
                            {
                              $image = 'kimnguu';
                              $time = "21/4 - 21/5";
                            }
                            if ($ngay >= 22)
                            {
                              $image = 'songtu';
                              $time = "22/5 - 22/6";
                            }
                          break;
                          case 6:
                            if ($ngay <= 22)
                            {
                              $image = 'songtu';
                              $time = "22/5 - 22/6";
                            }
                            if ($ngay >= 23)
                            {
                              $image = 'cugiai';
                              $time = "23/6 - 23/7";
                            }
                          break;
                          case 7:
                            if ($ngay <= 23)
                            {
                              $image = 'cugiai';
                              $time = "23/6 - 23/7";
                            }
                            if ($ngay >= 24)
                            {
                              $image = 'sutu';
                              $time = "24/7 - 23/8";
                            }
                          break;
                          case 8:
                            if ($ngay <= 23)
                            {
                              $image = 'sutu';
                              $time = "24/7 - 23/8";
                            }
                            if ($ngay >= 24)
                            {
                              $image = 'xunu';
                              $time = "24/8 - 23/9";
                            }
                          break;
                          case 9:
                            if ($ngay <= 23)
                            {
                              $image = 'xunu';
                              $time = "24/8 - 23/9";
                            }
                            if ($ngay >= 24)
                            {
                              $image = 'thienbinh';
                              $time = "24/9 - 23/10";
                            }
                          break;
                          case 10:
                            if ($ngay <= 23)
                            {
                              $image = 'thienbinh';
                              $time = "24/9 - 23/10";
                            }
                            if ($ngay >= 24)
                            {
                              $image = 'bocap';
                              $time = "24/10 - 22/11";
                            }
                          break;
                          case 11:
                            if ($ngay <= 22)
                            {
                              $image = 'bocap';
                              $time = "24/10 - 22/11";
                            }
                            if ($ngay >= 23)
                            {
                              $image = 'nhanma';
                              $time = "23/11 - 22/12";
                            }
                          break;
                          case 12:
                            if ($ngay <= 22)
                            {
                              $image = 'nhanma';
                              $time = "23/11 - 22/12";
                            }
                            if ($ngay >= 23)
                            {
                              $image = 'maket';
                              $time = "23/12 - 19/1";
                            }
                          break;
                        }
                        $result = "
                          <div class='result'>
                            <img src='public/images/$image.png'>
                            <h4>($time)</h4>
                          </div>
                        ";
                      }
                      else
                      {
                        $result = "vui long nhap lai ngay thang";
                      }
                    }
                    else{
                      $result = "vui long nhap so";
                    }
                  }?>
                  <form method ="post" style="border: 1px solid black; width: 550px; margin: 10px auto; padding: 20px; text-align: center; font-weight: bold">	
                    <h1 style="color: red;">Ban thuoc chom sao gi?</h1>
                    Ngay sinh: <input type="text" name="ngay" value="<?php echo $ngay?>" required><br><br>
                    Thang sinh: <input type="text" name="thang" value="<?php echo $thang?>" required><br><br>
                    <input type="submit" value="Lay chom sao!"><br><br>
                  </form>
                  <h3 style="text-align: center;">
                    <?php
                      echo $result;
                    ?>
                  </h3><?php		
								break;
								case '3':?>
                <!-- may atm -->
                  <style>
                    .content11 {
                    width: 700px;
                    border: 2px solid #9A9A9A;
                    background: #E6E6E6;
                    margin: 20px auto;
                    }
                    
                    .content11 .info {
                    height: 150px;
                    padding: 0px;
                    text-align: center;
                    } 
                    .content11 .info img {
                    margin: 10px;
                    float: left;
                    border-radius: 5px;
                    }

                    .content11 .info h1 {
                    color: red;
                    margin: 0px;
                    }

                    .content11 .info p {
                    font-size: 18px;
                    }

                    .content11 .info input {
                    height: 30px;
                    }

                    .content11 .info input[type='text'] {
                    width: 300px;
                    font-size: 18px;
                    }

                    .content11 .info input[type='submit'] {
                    width: 100px;
                    font-size: 18px;
                    border-radius: 5px;
                    height: 34px;
                    }

                    .clr {
                    clear:both;
                    }

                    .result div p {
                    display: inline-table;
                    font-size: 18px;
                    font-weight: bold;
                    margin-top: 0px;
                    margin-bottom: 5px;
                    }
                    .result div p.col1{
                    width: 200px;
                    text-align: left;
                    }
                    .result div p.col2{
                    width: 200px;
                    text-align: center;
                    }
                    .result div p.col3{
                    width: 200px;
                    text-align: right;
                    }
                    .result {
                    padding: 10px;
                    }

                    .result p.total {
                    text-align: right;
                    font-size: 20px;
                    font-weight: bold;
                    color: #3879D9;
                    }
                  </style>
                  <div class="content11">
                    <?php
                      $money = 0;
                      $total = 0;
                      if(isset($_POST['money'])) $money = $_POST['money'];
                    ?>
                    <div class="info">
                      <img src="public/images/bocap.png" alt="atm">
                      <h1>Mô phỏng máy ATM</h1>
                      <form action="#" method="post">
                        <p>Vui lòng nhập vào số tiền mà quý khách muốn thực hiện giao dịch</p>
                        <input type="text" name="money" value="<?php echo number_format($money);?>">
                        <input type="submit" value="Rút tiền">
                      </form>
                    </div>
                    <div class="clr"></div>
                    <div class="result">
                      <div class="normal">
                          <p class="col1">Mệnh giá</p>
                          <p class="col2">Số lượng</p>
                          <p class="col3">Thành tiền</p>
                      </div>
                      <div class="clr"></div>
                      <?php
                        define("F", 100);
                        define("ONE", 1000);
                        define("TWO", 2000);
                        define("FIVE", 5000);
                        define("ONE_0", 10000);
                        define("TWO_0", 20000);
                        define("FIVE_0", 50000);
                        define("ONE_00", 100000);
                        define("TWO_00", 200000);
                        define("FIVE_00", 500000);
                        define("ONE_000", 1000000);

                        $one000 = 0;
                        $five00 = 0;
                        $two00 = 0;
                        $one00 = 0;
                        $five0 = 0;
                        $two0 = 0;
                        $one0 = 0;
                        $five = 0;
                        $two = 0;
                        $one = 0;
                        $f = 0;
                        if (is_numeric($money) && $money > 1000)
                        {
                          while($money >= ONE_000)
                          {
                            $one000 += 1;
                            $money = $money - ONE_000;
                          }
                          while($money >= FIVE_00)
                          {
                            $five00 += 1;
                            $money = $money - FIVE_00;
                          }
                          while($money >= TWO_00)
                          {
                            $two00 += 1;
                            $money = $money - TWO_00;
                          }
                          while($money >= ONE_00)
                          {
                            $one00 += 1;
                            $money = $money - ONE_00;
                          }
                          while($money >= FIVE_0)
                          {
                            $five0 += 1;
                            $money = $money - FIVE_0;
                          }
                          while($money >= TWO_0)
                          {
                            $two0 += 1;
                            $money = $money - TWO_0;
                          }
                          while($money >= ONE_0)
                          {
                            $one0 += 1;
                            $money = $money - ONE_0;
                          }
                          while($money >= ONE)
                          {
                            $one += 1;
                            $money = $money - ONE;
                          }
                          while($money >= TWO)
                          {
                            $two += 1;
                            $money = $money - TWO;
                          }
                          while($money >= FIVE)
                          {
                            $five += 1;
                            $money = $money - FIVE;
                          }
                          while($money >= F)
                          {
                            $f += 1;
                            $money = $money - F;
                          }
                          $total = F * $f + ONE_000 * $one000 + FIVE_00 * $five00 + TWO_00 * $two00 + ONE_00 * $one00 + FIVE_0 * $five0 + TWO_0 * $two0 + ONE_0 * $one0 + ONE * $one + TWO * $two + FIVE * $five;
                        }
                      ?>
                      <?php
                        if($one000 > 0)
                        {
                          echo '<div class="normal">
                                  <p class="col1">'.number_format(ONE_000).'</p>
                                  <p class="col2">'.$one000.'</p>
                                  <p class="col3">'.number_format(ONE_000 * $one000).'</p>
                                </div><div class="clr"></div>';
                        }
                        if($five00 > 0)
                        {
                          echo '<div class="normal">
                                  <p class="col1">'.number_format(FIVE_00).'</p>
                                  <p class="col2">'.$five00.'</p>
                                  <p class="col3">'.number_format(FIVE_00 * $five00).'</p>
                                </div><div class="clr"></div>';
                        }
                        if($two00 > 0)
                        {
                          echo '<div class="normal">
                                  <p class="col1">'.number_format(TWO_00).'</p>
                                  <p class="col2">'.$two00.'</p>
                                  <p class="col3">'.number_format(TWO_00 * $two00).'</p>
                                </div><div class="clr"></div>';
                        }
                        if($one00 > 0)
                        {
                          echo '<div class="normal">
                                  <p class="col1">'.number_format(ONE_00).'</p>
                                  <p class="col2">'.$one00.'</p>
                                  <p class="col3">'.number_format(ONE_00 * $one00).'</p>
                                </div><div class="clr"></div>';
                        }
                        if($five0 > 0)
                        {
                          echo '<div class="normal">
                                  <p class="col1">'.number_format(FIVE_0).'</p>
                                  <p class="col2">'.$five0.'</p>
                                  <p class="col3">'.number_format(FIVE_0 * $five0).'</p>
                                </div><div class="clr"></div>';
                        }
                        if($two0 > 0)
                        {
                          echo '<div class="normal">
                                  <p class="col1">'.number_format(TWO_0).'</p>
                                  <p class="col2">'.$two0.'</p>
                                  <p class="col3">'.number_format(TWO_0 * $two0).'</p>
                                </div><div class="clr"></div>';
                        }
                        if($one0 > 0)
                        {
                          echo '<div class="normal">
                                  <p class="col1">'.number_format(ONE_0).'</p>
                                  <p class="col2">'.$one0.'</p>
                                  <p class="col3">'.number_format(ONE_0 * $one0).'</p>
                                </div><div class="clr"></div>';
                        }
                        if($one > 0)
                        {
                          echo '<div class="normal">
                                  <p class="col1">'.number_format(ONE).'</p>
                                  <p class="col2">'.$one.'</p>
                                  <p class="col3">'.number_format(ONE * $one).'</p>
                                </div><div class="clr"></div>';
                        }
                        if($two > 0)
                        {
                          echo '<div class="normal">
                                  <p class="col1">'.number_format(TWO).'</p>
                                  <p class="col2">'.$two.'</p>
                                  <p class="col3">'.number_format(TWO * $two).'</p>
                                </div><div class="clr"></div>';
                        }
                        if($five > 0)
                        {
                          echo '<div class="normal">
                                  <p class="col1">'.number_format(FIVE).'</p>
                                  <p class="col2">'.$five.'</p>
                                  <p class="col3">'.number_format(FIVE * $five).'</p>
                                </div><div class="clr"></div>';
                        }
                        if($f > 0)
                        {
                          echo '<div class="normal">
                                  <p class="col1">'.number_format(F).'</p>
                                  <p class="col2">'.$f.'</p>
                                  <p class="col3">'.number_format(F * $f).'</p>
                                </div><div class="clr"></div>';
                        }		
                        echo '<hr><p class="total">Tổng tiền: ' .number_format($total) . '</p>';			
                      ?>
                    </div>
                  </div><?php
                break;
                case '4':?>
                <!-- doc so co 12 chu so --><?php
                  $dictionnaryNumbers = array(
                    0 => 'không',
                    1 => 'một',
                    2 => 'hai',
                    3 => 'ba',
                    4 => 'bốn',
                    5 => 'năm',
                    6 => 'sáu',
                    7 => 'bảy',
                    8 => 'tám',
                    9 => 'chín'
                  );
                  $dictionnaryUnits = array(
                    0 => " tỷ ",
                    1 => " triệu ",
                    2 => " nghìn ",
                    3 => " đồng ",
                  );
                  function readNumber3Digit($number, $dictionaryNumber, $readFull = true)
                  {
                    $number = strval($number);
                    $number = str_pad($number, 3, 0, STR_PAD_LEFT);
                    $digit_0 = substr($number, 2, 1);
                    $digit_00 = substr($number, 1, 1);
                    $digit_000 = substr($number, 0, 1);
          
                    $str_000 = $dictionaryNumber[$digit_000] . ' trăm ';
                    $str_00 = $dictionaryNumber[$digit_00] . ' mươi ';
                    if($digit_00 == 0) $str_00  = ' lẻ ';
                    if($digit_00 == 1) $str_00  = ' mười ';
                    $str_0 = $dictionaryNumber[$digit_0];
                    if($digit_00 > 1 && $digit_0 == 1) $str_0  = ' mốt ';           
                    if($digit_00 > 0 && $digit_0 == 5) $str_0  = 'lăm ';           
                    if($digit_00 == 0 && $digit_0 == 0)
                    {
                      $str_00 = '';
                      $str_0 = '';
                    }        
                    if($readFull == false)
                    { 
                      if($digit_000 == 0 ) $str_000 = '';
                      if($digit_000 == 0 && $digit_00 == 0) $str_00 = '';
                    }   
                    $resull = $str_000 . $str_00 . $str_0;
                    return $resull;
                  }
                  
                  function formatString($str, $type = null)
                    {
                      $str = strtolower($str);
                      $str = trim($str);
                      $arrex = explode(' ', $str);
                      foreach ($arrex as $key => $value)
                      {
                        if(trim($value) == null) {
                          unset($arrex[$key]);
                          continue;
                        }
                        if($type == 'danh-tu')
                        {
                          $arrex[$key] = ucfirst($value);
                        }
                      }
                      $result = implode(' ', $arrex);
                      $result = ucfirst($result);
                      return $result;
                    }
          
                  function readNumber12Digits($number, $dictionnaryUnits, $dictionnaryNumbers)
                  {
                    $number = strval($number);
                    $number = str_pad($number, 12, 0, STR_PAD_LEFT);
                    $arrNumber = str_split($number, 3);
                    foreach($arrNumber as $key => $value)
                    {
                      if($value != '000')
                      {
                        $index = $key;
                        break;
                      }
                    }
          
                    foreach($arrNumber as $key => $value)
                    {
                      if($key >= $index)
                      {
                        $readFull = true;
                        if($key == $index) $readFull = false;
                          $resull[$key] = readNumber3Digit($value, $dictionnaryNumbers, $readFull) .$dictionnaryUnits[$key];
                      }
                    }
                    $resull = implode(" ", $resull);
                    $resull = formatString($resull);
          
                    $resull = str_replace("không đồng", "đồng", $resull);
                    $resull = str_replace("không trăm đồng", "đồng", $resull);
                    $resull = str_replace("không nghìn đồng", "nghìn đồng", $resull);
                    $resull = str_replace("không trăm nghìn đồng", "đồng", $resull);
                    $resull = str_replace("không triệu đồng", "đồng", $resull);
                    $resull = str_replace("không trăm triệu đồng", "đồng", $resull);
                    $resull = str_replace("không tỷ triệu đồng", "đồng", $resull);
                    return $resull;
                  }
                  
                  $number =1000000;
                  $resull = readNumber12Digits($number, $dictionnaryUnits, $dictionnaryNumbers);      
                          
                  echo "Input: " . $number . '<br>';
                  echo "Output: " . $resull . '<br>';        
                break;
                case '5':?>
                <!-- tao anh ngau nhien -->
                  <style>
                    .contentimg{
                      margin: 20px auto;
                      width: 450px;
                      border: 1px solid #999;
                      padding: 10px;
                    }
                    .contentimg h1{
                      text-align: center;
                      color: red;
                    }
                    .contentimg .image{
                      text-align: center;
                      margin: 20px 0;
                    }
                    .contentimg .image img{
                      margin: 10px 0;
                    }
                    .contentimg .image a{
                      display: block;
                      background-color: #686f97;
                      padding: 3px 10px;
                      text-decoration: none;
                      border-radius: 20px;
                      color: #fff;
                      width: 200px;
                      margin: 0 auto;
                    }
                    .contentimg .image a:hover{
                      color: #f6f321;
                    }
                  </style>
                  <script>
                    function refreshpage(){
                      window.location.reload();
                    }
                  </script>
                  <div class="contentimg">
                    <h1>hinh anh ngau nhien</h1>
                    <div class="image">
                      <?php
                        $num = rand(1,12);
                        echo '<img src="public/images/bocap-0'.$num.'.png">';
                      ?>
                      <a href="javascript:refreshpage()">Random img</a>
                    </div>
                  </div><?php
                break;
                case '6':?>
                  <!-- number -->
                    <h1>number</h1>
                    <?php
                    //kiemtra
                      $number = '2,000,000';
                      $number = str_replace(',', '', $number);
                      if(is_numeric($number))
                      {
                        echo 'number';
                      }
                      else
                      {
                        echo 'not number';
                      }
                    //tao 1 day so
                      $start = 2;
                      $end = 20;
                      $array = range($start, $end, 3);
                      echo '<pre>';
                      print_r($array);
                      echo '</pre>';
                    //lam tron so
                      $number = 18.5;
                      echo round($number). '<br>';
                      echo round($number, 2). '<br>';
                      echo round($number, 0, PHP_ROUND_HALF_UP). '<br>';
                      echo round($number, 0, PHP_ROUND_HALF_DOWN). '<br>';
                      echo round($number, 0, PHP_ROUND_HALF_ODD). '<br>';
                      echo round($number, 0, PHP_ROUND_HALF_EVEN). '<br>';

                      echo ceil($number). '<br>';
                      echo floor($number). '<br>';
                    //tim tong
                      $arr = array(1,-3,5,6,8,4);
                      
                      sort($arr);
                      $sum = 0;
                      foreach ($arr as $value)
                      {
                        $sum += $value;
                      }
                      echo '<pre>';
                      print_r($arr);
                      echo '</pre>';

                      $min = $arr[0];
                      $max = $arr[count($arr) - 1];
                      echo 'max' . $max . '<br>';
                      echo 'min' . $min . '<br>';
                      echo 'sum' . $sum . '<br>';
                      $sum = array_sum($arr);
                      echo min($arr) . '<br>';
                      echo max($arr) . '<br>';
                      echo $sum . '<br>';
                      
                      $strnum = '1,-3,5,6,8,4';
                      $arrnum = explode(',', $strnum);
                      $sum = array_sum($arrnum);
                      echo min($arrnum) . '<br>';
                      echo max($arrnum) . '<br>';
                      echo $sum . '<br>';
                    //tao so ngau nhien
                      echo 'so ngau nhien: ' . rand().'<br>';
                      echo 'so ngau nhien (0 - 10): '.rand(0,10).'<br>';
                    //dinh dang so
                      $num = 123456789.123456;
                      $out = number_format($num, 3);
                      echo 'input: '. $num. '<br>';
                      echo 'output: '. $out. '<br>';
                    //lay gia tri tuyet doi
                      $num = -12.34;
                      $out = abs($num);
                      echo 'input: '. $num. '<br>';
                      echo 'output: '. $out. '<br>';
                    //luy thua
                      $x = 2;
                      $y = 3;
                      $out = pow($x, $y);
                      echo 'output: '. $out. '<br>';
                    //can bac hai
                      $x = 25;
                      $out = sqrt($x);
                      echo 'output: '. $out. '<br>';?>
                    <!-- phan so -->
                      <?php
                        $fraction = "4/3";
                        $arrfraction = explode("/",$fraction);
                        echo "<pre>";
                        print_r($arrfraction);
                        echo "</pre>";        
                        $ts = $arrfraction[0];
                        $ms = $arrfraction[1];
                        function ucln($n1, $n2){
                          for($i = 1; $i <= $n1; $i++)
                          {
                            if($n1 % $i == 0) $uclnn1[] = $i;
                          }
                          for($i = 1; $i <= $n2; $i++)
                          {
                            if($n2 % $i == 0) $uclnn2[] = $i;
                          }
                          $tam = array_intersect($uclnn1, $uclnn2);
                          $result = max($tam);
                          return $result;
                        }
                        $ucln = ucln($ts,$ms);
                        $ts = $ts/$ucln;
                        $ms = $ms/$ucln;
                        echo $ts . "/" . $ms. "<br>";
                        //nhan 2 phan so
                        $fraction1 = "52/6";
                        $fraction2 = "34/8";
                        echo "<hr> input: <br>";
                        echo "phan so thu nhat: $fraction1 <br>";
                        echo "phan so thu hai: $fraction2 <br>";
                        function optfraction($fraction)
                        {
                            $arrfraction = explode("/",$fraction);    
                            $ucln = ucln($arrfraction[0], $arrfraction[1]);
                            $arrfraction[0] /=  $ucln;
                            $arrfraction[1] /=  $ucln;
                            return $arrfraction;
                        }
                        $result = optfraction($fraction);
                        
                        $fraction1 = optfraction($fraction1);
                        $fraction2 = optfraction($fraction2);
                        echo "<hr> toi gian: <br>";
                        echo "phan so thu nhat: " . implode("/", $fraction1). "<br>";
                        echo "phan so thu hai: " . implode("/", $fraction2). "<br>";
                        $result[0] = $fraction1[0] * $fraction2[0];
                        $result[0] = $fraction1[1] * $fraction2[1];

                        echo "tich: " . implode("/", $result). "<br>";
                        
                      ?>
                    <?php
                break;
                case '7':?>
                  <!-- time -->
                    <h1>Time</h1><?php
                    $time = getdate();
                    echo "<pre>";
                    print_r($time);
                    echo "</pre>";
                    //giơ
                    echo $hours = $time["hours"] . "<br>";      
                    //mui gio
                    $timeZone = date_default_timezone_get();
                    echo $timeZone ."<br>";
                    date_default_timezone_set("Asia/Ho_Chi_Minh");
                    $timeZonef = date_default_timezone_get();
                    echo $timeZonef. "<br>";
                    $time = getdate();
                    echo "<pre>";
                    print_r($time);
                    echo "</pre>";
                    //lam viec voi mui gio
                    $timezone = timezone_identifiers_list(16);
                    echo "<pre>";
                    print_r($timezone);
                    echo "</pre>";
                    //xac dinh thoi gian hien tai
                    $time = time();
                    echo $time. "<br>";
                    $times = mktime(1,0,0,1,1,1970);
                    echo $times."<br>";
                    //dinh dang hien thi time
                    $time = time();
                    $time = mktime(12,12,12,12,12,2018);
                    echo date("d/m/Y - H:i:s A", $time).'<br>';
                    //kiem tra ngay hop le
                    $reault = checkdate(12,31,2018);
                    echo $reault. '<br>';
                break;
                case '8':?>
                <!-- thao tac ngay thang -->
                  <style>
                    .time{
                      margin: 20px auto;
                      width: 700px;
                      border: 2px solid #2baf4d;
                    }
                    .time h1{
                      text-align: center;
                      margin-bottom: 10px;
                      color: #d01713;
                    }
                    .time .row{
                      margin-bottom: 10px;
                    }
                    .time .row span{
                      display: inline-block;
                      width: 100px;
                    }
                    .time .row select{
                      width: 100px;
                    }
                    .time .row input[type=submit]{
                      padding: 2px 10px;
                    }
                  </style>
                  <div class="time">
                    <div class="margin" style="margin: 30px;">
                      <h1>kiem tra thoi gian</h1>
                      <form action="" method="post" id="main" >
                        <div class="row">
                          <span>ngay</span>
                            <?php
                              $arrDays = range(1, 31);
                              $arrMonths = range(1, 12);
                              $arrYears = range(1970, 2018);
                              function createSelectBox($arrData, $name, $keySelected)
                              {
                                $strDays = "";
                                if(!empty($arrData))
                                {
                                  $strDays = '<select name="'.$name.'">';
                                  for($i = 0; $i <count($arrData); $i++)
                                  {
                                    if($keySelected == $i)
                                    {
                                      $strDays .= '<option value="'.$i.'" selected="true">'.$arrData[$i].'</option>';
                                    }
                                    else{
                                      $strDays .= '<option value="'.$i.'">'.$arrData[$i].'</option>';
                                    }
                                  }
                                  $strDays .= '</select>'; 
                                }
                                return $strDays;
                              }
                              $days = (isset($_POST['days-select'])) ? $_POST['days-select'] : 0; 
                              $months = (isset($_POST['months-select'])) ? $_POST['months-select'] : 0; 
                              $years = (isset($_POST['years-select'])) ? $_POST['years-select'] : 0; 
                              $strDays = createSelectBox($arrDays, "days-select", $days);
                              $strMonths = createSelectBox($arrMonths, "months-select", $months);
                              $strYears = createSelectBox($arrYears, "years-select", $years);
                              echo $strDays;
                            ?>
                        </div>
                        <div class="row">
                          <span>thang</span>
                          <?php
                            echo $strMonths;
                          ?>
                        </div>
                        <div class="row">
                          <span>nam</span>
                            <?php
                              echo $strYears;
                            ?>
                        </div>
                        <div class="row">
                          <input type="submit" value="check date">
                        </div>
                        <div class="result">
                          <?php
                            echo "ngay duoc chon: $arrDays[$days]/$arrMonths[$months]/$arrYears[$years] <br>";
                            if(checkdate($arrMonths[$months], $arrDays[$days], $arrYears[$years]))
                            {
                              echo "<p>ngay hop le</p><br>";
                            }
                            else
                            {
                              echo "<p>ngay khong hop le</p><br>";                    
                            }
                          ?>
                        </div>
                      </form>
                    </div>
                  </div><?php
                break;
                case '9':?>
                  <!-- date picker-->
                    <style>
                      .content4{
                        margin: 20px auto;
                        width: 700px;
                        border: 2px solid #2baf4d;
                      }
                      .content4 h1{
                        text-align: center;
                        margin-bottom: 10px;
                        color: #d01713;
                      }
                      .content4 .row{
                        margin: 10px 15px;
                      }
                      .content4 .row span{
                        display: inline-block;
                        width: 100px;
                      }
                      .content4 .row select{
                        width: 100px;
                      }
                      .content4 .row input[type=submit]{
                        padding: 2px 10px;
                      }
                    </style>
                    <script>
                      $( function() {
                        $( "#datepicker" ).datepicker({
                          dateFormat: "dd/mm/yy",
                          changeYear: true,
                          yearRange: "1997:2018",
                          changeMonth: true
                        });
                      } );
                    </script>
                    <div class="content4">
                      <h1>Date picker</h1><?php
                        $date = (isset($_POST['date'])) ? $_POST['date'] : "";
                      ?>
                      <form action="" method="post">
                        <div class="row">
                          <span>Date: </span>
                          <input readonly="readonly" type="text" id="datepicker" name="date" value="<?php echo $date ?>">
                        </div>
                        <div class="row">
                          <input type="submit" value="submit">    
                        </div>   
                      </form>
                      <div class="result">
                        <?php
                          echo "input ". $date . '<br>';
                          $date = date_parse_from_format('d/m/Y' , $date);
                          $timestamp = mktime(0, 0, 0, $date['month'], $date['day'], $date['year']);
                          echo "output ". date("d-m-Y", $timestamp) . '<br>';?>
                  <!-- lam viec voi thoi gian -->      
                    <h1>lam viec voi thoi gian</h1><?php
                      $result = date('h:i A D, d/m/Y', time());
                      $arrEn = array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun');
                      $arrVn = array('Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ nhật');
                      $result = str_replace($arrEn, $arrVn, $result);
                      $result = str_replace(',', ', ngày', $result);
                      echo $result;
                    ?>
                  <!-- kiem tra nam nhuan -->
                      <h1>kiem tra nam nhuan</h1><?php
                        // function testLeapYear($year)
                        // {
                        //   $flag = false;
                        //   if($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0 )
                        //   {
                        //     $flag = true;
                        //   }
                        //   return $flag;
                        // }
                        // $year = 2012;
                        // if(testLeapYear($year))
                        // {
                        //   echo 'nam nhuan';
                        // }
                        // else
                        // {
                        //   echo 'khong phai la nam nhuan';
                        // }
                        // c2
                        $year = 2013;
                        if(checkdate(2, 29, $year))
                        {
                          echo 'nam nhuan';
                        }
                        else
                        {
                          echo 'khong phai la nam nhuan';
                        }
                  ?>
                  <!-- tim so ngay trong thang -->
                     <h1>tim so ngay trong thang</h1><?php
                      $month = 2;
                      $year = 2018;
                      $timestamp = mktime(0, 0, 0, $month, 1, $year);
                      echo $totalDays = date('t', $timestamp);
                  ?>
                  <!-- xac dinh khoang thoi gian -->
                      <h1>xac dinh khoang thoi gian</h1><?php
                        $timePost = '16/02/2018 15:00:00';
                        $timeReply = '27/02/2018 16:31:30';
                        $datePost = date_parse_from_format('d/m/Y H:i:s', $timePost);
                        $dateReply = date_parse_from_format('d/m/Y H:i:s', $timeReply);
                        $tsPost = mktime($datePost['hour'], $datePost['minute'], $datePost['second'], $datePost['month'], $datePost['day'], $datePost['year']);
                        $tsReply = mktime($dateReply['hour'], $dateReply['minute'], $dateReply['second'], $dateReply['month'], $dateReply['day'], $dateReply['year']);
                        $distance = $tsReply - $tsPost;
                        switch($distance)
                          {
                            case ($distance < 60):
                              $result = ($distance == 1) ? $distance .' second ago' : $distance . ' seconds ago';
                            break;
                            case ($distance >= 60 && $distance < 3600):
                              $minute = round($distance/60);
                              $result = ($minute == 1) ? $minute .' minute ago' : $minute . ' minutes ago';
                            break;
                            case ($distance >= 3600 && $distance < 86400):
                              $hour = round($distance/3600);
                              $result = ($hour == 1) ? $hour .' hour ago' : $hour . ' hours ago';
                            break;
                            case (round($distance/86400)==1):
                              $hour = round($distance/3600);
                              $result = 'Yesterday at '. date('H:i:s', $tsReply);
                            break;
                            default:
                              $result = date('d/m/Y \a\t H:i:s', $tsReply);
                            break;
                          }
                          echo $result;
                      ?>
                  <!-- so sanh 2 ngay -->
                    <h1>so sanh 2 ngay</h1>
                    <script>
                        $( function() {
                          $( "#datestart" ).datepicker({
                            dateFormat: "dd/mm/yy",
                            changeYear: true,
                            yearRange: "1997:2018",
                            changeMonth: true
                          });
                        } );
                        $( function() {
                          $( "#dateend" ).datepicker({
                            dateFormat: "dd/mm/yy",
                            changeYear: true,
                            yearRange: "1997:2018",
                            changeMonth: true
                          });
                        } );
                    </script>
                      <?php
                        $datestart = (isset($_POST['datestart'])) ? $_POST['datestart'] : "";
                        $dateend = (isset($_POST['dateend'])) ? $_POST['dateend'] : "";
                      ?>
                      <form action="" method="post">
                        <div class="row">
                          <span>Start: </span>
                          <input readonly="readonly" type="text" id="datestart" name="datestart" value="<?php echo $datestart ?>">
                        </div>
                        <div class="row">
                          <span>End: </span>
                          <input readonly="readonly" type="text" id="dateend" name="dateend" value="<?php echo $dateend ?>">
                        </div>
                        <div class="row">
                          <input type="submit" value="submit">    
                        </div>   
                      </form>
                      <div class="result">
                        <?php
                          function comparetwoday($datestart, $dateend)
                          {
                            $arrdatestart = date_parse_from_format('d/m/Y' , $datestart);
                            $tsstart = mktime(0, 0, 0, $arrdatestart['month'], $arrdatestart['day'], $arrdatestart['year']);
                            $arrdateend = date_parse_from_format('d/m/Y' , $dateend);
                            $tsend = mktime(0, 0, 0, $arrdateend['month'], $arrdateend['day'], $arrdateend['year']);
                            $result = 0;
                            if($tsend > $tsstart)
                            {
                              $result = 1;
                            }
                            else if($tsend < $tsstart)
                            {
                              $result = -1;
                            }
                            return $result;
                          }

                          if(comparetwoday($datestart, $dateend)==1)
                          {
                            echo "end > start";
                          }
                          else if(comparetwoday($datestart, $dateend)==-1)
                          {
                            echo "start > end";
                          }
                          else{
                            echo "end = start";
                          }
                        ?>
                      </div>
                    </div>
                  <!-- congtru thoi gian -->
                    <h1>cong tru thoi gian</h1>
                    <script>
                        $( function() {
                          $( "#date" ).datepicker({
                            dateFormat: "dd/mm/yy",
                            changeYear: true,
                            yearRange: "1997:2018",
                            changeMonth: true
                          });
                        } );
                    </script>
                      <?php
                        function createSelectBox($arrData, $name, $keySelected)
                        {
                          $strDays = "";
                          if(!empty($arrData))
                          {
                            $strDays = '<select name="'.$name.'">';
                            for($i = 0; $i <count($arrData); $i++)
                            {
                              if($keySelected == $i)
                              {
                                $strDays .= '<option value="'.$i.'" selected="true">'.$arrData[$i].'</option>';
                              }
                              else{
                                $strDays .= '<option value="'.$i.'">'.$arrData[$i].'</option>';
                              }
                            }
                            $strDays .= '</select>'; 
                          }
                          return $strDays;
                        }
                        function addTime($date, $format, $type, $value)
                        {
                          $arrDate = date_parse_from_format($format, $date);
                          $type = strtolower($type);
                          switch($type)
                          {
                            case 'day':
                              $ts = mktime(0,0,0, $arrDate['month'], $arrDate['day'] + $value, $arrDate['year']);
                            break;
                            case 'month':
                              $ts = mktime(0,0,0, $arrDate['month']  + $value, $arrDate['day'], $arrDate['year']);
                            break;
                            case 'year':
                            $ts = mktime(0,0,0, $arrDate['month'], $arrDate['day'], $arrDate['year']  + $value);
                          break;
                          }
                          echo $result = date($format, $ts);
                          return $result;
                        }
                        $arrType = array('-- Select type --' ,'Day', 'Month', 'Year');
                        $date = (isset($_POST['date'])) ? $_POST['date'] : "";
                        $type = (isset($_POST['select-type'])) ? $_POST['select-type'] : "";
                        $value = (isset($_POST['value'])) ? $_POST['value'] : "";
                        $strType = createSelectBox($arrType, 'select-type', $type);
                        addTime($date, 'd/m/Y', $arrType[$type], $value);
                      ?>
                      <form action="" method="post">
                        <div class="row">
                          <span>date: </span>
                          <input readonly="readonly" type="text" id="date" name="date" value="<?php echo $date ?>">
                        </div>
                        <div class="row">
                          <span>Type</span>
                          <?php
                            echo $strType;
                          ?>
                        </div>   
                        <div class="row">
                          <span>Value</span>
                          <input type="text" id="value" name="value" value="<?php echo $value ?>">                          
                        </div>  
                        <div class="row">
                          <input type="submit" value="submit">    
                        </div> 
                      </form>
                      <div class="result">
                        <?php
                        ?>
                      </div>
                    </div>  
                    <?php
                break;
                case '10':?>
                  <!-- phuong thuc preg_match preg_match_all -->
                    <h1>preg_match</h1><?php
                    $subject = 'php /php/ is easy';
                    $pattern = '#/php/#';
                    if(preg_match_all($pattern, $subject, $match)==true)
                    {
                      echo 'tim thay';
                    }
                    else
                    {
                      echo 'khong tim thay';
                    }
                    echo '<pre>';
                    print_r($match[0]);
                    echo '</pre>';  ?>
                    <h1>checkInput</h1><?php
                    function checkEmail($value)
                    {
                      $pattern = '#^[a-z][a-z0-9_\.]{4,31}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$#';
                      $flag = false;
                      if(preg_match($pattern, $value)==true)
                      {
                        $flag = true;
                      }
                      return $flag;
                    }   
                    function checkUserName($value)
                    {
                      $pattern = '#^[a-z][a-z0-9_\.\s]{4,31}$#';
                      $flag = false;
                      if(preg_match($pattern, $value)==true)
                      {
                        $flag = true;
                      }
                      return $flag;
                    } 
                    function checkPassword($value)
                    {
                      $pattern = '#^(?=.*\d)(?=.*[A-Z])(?=.*\W).{8,8}$#';
                      $flag = false;
                      if(preg_match($pattern, $value)==true)
                      {
                        $flag = true;
                      }
                      return $flag;
                    }
                    function checkWebsite($value)
                    {
                      $pattern = '#^(https?://(www\.)?|(www\.))[a-z0-9\-]{3,}(\.[a-z]{2,4}){1,2}$#';
                      $flag = false;
                      if(preg_match($pattern, $value)==true)
                      {
                        $flag = true;
                      }
                      return $flag;
                    }
                  $result0 = checkEmail('nguyenvanbinh3479@gmail.com');
                  $result1 = checkUserName('nguyenvanbinh3479gmailcom');
                  $result2 = checkPassword('binhK12@');
                  $result3 = checkWebsite('www.zend.vn');
                  echo $result0;
                  echo $result1;
                  echo $result2;
                  echo $result3;
							}
						}?>
			</div>
    </div>
    <!-- ve tam giac -->
      <style>
        .ull{
          list-style-type: none;
          border: 1px solid #000;
          width: 900px;
          padding: 10px 97px;
          margin: 0px auto;
          border-radius: 10px;
        }
        .lii{
          display: inline-block;
          margin-right: 48px;
        }
        .name:link, .name:visited{
          border: 5px solid #ff9800;
          color: #000;
          border-radius: 20px;
          padding: 20px 50px;
          display: inline-block;
          font-weight: bold;
          text-decoration: none;
        }
        .name:hover{
          border: 5px solid #000;
          color: #ff9800;
        }
      </style>
      <div class="tamgiac">
          <ul class="ull">
            <h1 style="color: red; margin: 50px 0; text-align: center;">Ve Tam Giac</h1>
            <li class="lii">
              <a class="name" href="zendVN.php?type=1">
                <?php
                  for( $i = 1; $i <= 6; $i++)
                  {
                    for ($j = 0; $j < $i; $j++)
                    {
                      echo "* ";
                    }
                    echo '<br>';
                  }
                ?>
              </a>
                      </li>
                      <li class="lii">
              <a class="name" href="zendVN.php?type=2">
                <?php
                  for ($i = 0; $i <= 6; $i++)
                  {
                    for($j = 6; $j > $i; $j--)
                    {
                      echo '* ';
                    }
                    echo '<br>';
                  }
                ?>
              </a>
                      </li>
                      <li class="lii" style="text-align: center; margin: 0;">
              <a class="name" href="zendVN.php?type=3">
              <?php
                for( $i = 1; $i <= 12; $i++)
                {
                  if($i % 2 == 0)
                  {
                    for ($j = 1; $j < $i; $j++)
                    {
              echo "* ";
                        }		
                        echo '<br>';
                      }
                    }
                  ?>
                </a>
                        </li>
                        <div class="result" style="margin: 100px auto 50px; width: 150px;">
              <?php
              $result = '';
                if(isset($_GET['type']))
                {
                  $type = $_GET['type'];
                  switch($type)
                  {
                    case '1':
                      $i = 1;
                      while($i <= 6)
                      {
                        $result .= str_repeat('* ', $i) . '<br>';
                        $i++;
                      }
                    break;
                    case '2':
                      $i = 6;
                      while($i >= 1)
                      {
                        $result .= str_repeat('* ', $i) . '<br>';
                        $i--;
                      }
                    break;
                    case '3':
                      $i = 1;
                      while ($i <= 6)
                      {
                        $space = str_repeat("&nbsp;&nbsp;", 6 - $i);
                        $character = str_repeat("* ", 2 * $i - 1);
                        $result .= $space . $character . "<br>";
                        $i++;
                      }
                    break;
                  }
                }
                echo $result;
              ?>
            </div>
          </ul>
      </div>
    <!-- image gallery -->
      <div class="image" style="border: 1px solid #000; width: 500px; margin: 100px auto; text-align: center;"><br>
        <h1 style="color: red;">image gallery</h1><br><br>
        <?php
          $i = 1;
          do
          {
            echo '<img src="public/images/bocap-0'.$i.'.png" alt=""><br><br><br><br>';
            $flagShow = 0;
            if (isset($_GET['show']))
            {
              $flagShow = $_GET['show'];
              $i++;
            }
          }
          while($i <= 12 && $flagShow == 1);
        ?>
        <a class="name" href="ZendVN.php?show=1">Show All</a>
        <a class="name" href="ZendVN.php?show=0">Show Demo</a><br><br>
      </div>
      
	</body>
</html>