<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="public/css/bootstrap.min.css">
		<script src="public/js/jquery-3.3.1.min.js"></script>
		<script src="public/js/bootstrap.min.js"></script>	
		<title>Document</title>
	</head>
	<body>
		<div class="content">
			<!-- hien thi tung trang -->
				<div class="tnt_pagination">
					<span class="disabled_tnt_pagination">Prev</span>
					<a href="zendVN.php?page=1">1</a>
					<a href="zendVN.php?page=2">2</a>
					<a href="zendVN.php?page=3">3</a>
					<a href="zendVN.php?page=4">4</a>
					<a href="zendVN.php?page=5">5</a>
					<a href="zendVN.php?page=6">6</a>
					<a href="zendVN.php?page=7">7</a>
					<a href="zendVN.php?page=8">8</a>
					<a href="zendVN.php?page=9">9</a>
					<a href="zendVN.php?page=10">10</a>
					<a href="#forwaed">Next</a>
				</div>
				<?php                       
					$result = (isset ($_GET['page'])==true) ? $_GET['page'] : 0;
				?>
				<p class="result">ban dang o trang thu <?php echo $result;?></p>

			<!-- may tinh -->
				<?php
					
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
				}
					?>
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
					?><?php 
				
				?>
				
				</h4>


			<!-- doan chom sao -->
				<?php
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
							}
				?>
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
				</h3>
			<!-- vong lap for -->
				<?php
					echo "<h1 style='text-align: center;'>for loop</h1>";
					for($i = 1; $i <= 10; $i++)
					{
						echo "<h2 style= 'text-align: center'>$i. hello every one! <br></h2>";
					}
				?>
			<!-- vong la while -->
				<style>
					ul{
						list-style-type: none;
						border: 1px solid #000;
						width: 900px;
						padding: 50px 97px;
						margin: 50px auto;
						border-radius: 10px;
					}
					li{
						display: inline-block;
						margin-right: 48px;
					}
					a:link, a:visited{
						border: 5px solid #ff9800;
						color: #000;
						border-radius: 20px;
						padding: 20px 50px;
						display: inline-block;
						font-weight: bold;
						text-decoration: none;
					}
					a:hover{
						border: 5px solid #000;
						color: #ff9800;
					}
				</style>
				<div class="tamgiac">
					<ul>
						<h1 style="color: red; margin: 50px 0; text-align: center;">Ve Tam Giac</h1>
						<li>
								<a href="ZendVN.php?type=1">
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
						<li>
								<a href="ZendVN.php?type=2">
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
						<li style="text-align: center; margin: 0;">
								<a href="ZendVN.php?type=3">
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
						<div class="result" style="margin: 100px auto 50px; width: 135px;">
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
			<!-- vong lap do while -->
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
					<a href="ZendVN.php?show=1">Show All</a>
					<a href="ZendVN.php?show=0">Show Demo</a><br><br>
				</div>
			<!-- break, continue -->
				<?php
					$n = 0;
					for($i = 0; $i <= 100; $i+=8)
					{
						if($n < 3)
						{
							if ($i % 8 == 0 && $i > 0)
							{
								echo $i.'<br>';
								$n++;
							}
						}
						else
						{
							break;
						}
					}
				?>
				<?php
					for ($i = 0; $i <= 10; $i++)
					{
						if($i == 3 || $i == 8) continue;
						echo $i . "<br/>";
					}
				?>
			<!-- giai cau do bang vong lap -->
				<div class="giaido" style="text-align: center; border: 1px solid #000; width: 630px; margin: 0 auto 50px; padding: 0 20px;">
					<h1 style='color: red;'>Giai cau do bang vong lap</h1>
					<p style="font-weight: bold; font-size: 20px;">Yeu nhau cau sau bo ba<br>
						Ghet nhau cau sau bo ra lam muoi<br>
						Moi nguoi mot mieng tram nguoi<br>
						Co muoi bay qua hoi nguoi ghet yeu.<br>
					</p>
					<p style="text-align: right;"><i>Hoi co bao nhieu nguoi yeu nhau, ghet nhau?</i></p>
					<h2 style="font-weight: bold;text-align: start">Dap an:</h2>
					<?php
						for($x = 1; $x <= 16; $x++)
						{
							for($y = 1; $y <= 9; $y++)
							{
								if( 3 * $x + 10 * $y == 100 && $x + $y == 17)
								{
									echo "<h6> $x nguoi yeu nhau va $y nguoi ghet nhau</h6>";
								}
							}
						}
					?>
				</div>
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
		</div>
		<!-- function -->
		<div class="ham">
			<style>
				.ham{
					width: 800px ;
					height: auto;
					border: 2px solid #0cc;
					margin: 20px auto;
					padding: 20px;
				}
				.ham div{
					border: 1px solid #0cc;
					padding: 5px;
					text-align: center;
					margin-bottom: 10px;
				}
				.ham div p{
					font-weight: bold;
				}
				.ham div p span{
					font-size: italic;
					font-weight: normal;
				}
			</style>
			<?php
				// function createBox()
				// {
				// 	$value = '<div style="width: 200px; height: 50px;">';
				// 	$value .=  '<p>box A<span>(200x500)</span></p>';
				// 	$value .=  '</div>';
				// 	return $value;
				// }
				// $result = createBox();
				// echo $result;

				function checkNumber($value)
				{
					echo $value;
					if ($value % 2 ==0)
					{
						return true;
					}
					else{
						return false;
					}
				}
				$result = checkNumber(23);
				if($result == true)
				{
					echo ' so chan <br>';
				}
				else
				{
					echo' so le<br>';
				}

				$value = 'ABC';//bien toan cuc
				function createBox($content, $width = 200, $height = 100)
				{
					//bien cuc bo
					$result = '<div style="width: '.$width.'px; height: '.$height.'px;">';
					$result .=  '<p>'.$content.'<span>('.$width.'x'.$height.')</span></p>';
					$result .=  '</div>';

					//goi bien toan cuc trong ham
					//cach2
					echo $GLOBALS['value'] ."<br>";

					//cach 1
					global $value;
					echo $value .'<br>';
					return $result;
				}
				$boxA = createBox("Box A");
				$boxB = createBox("Box B", 300,200);
				echo $boxA . $boxB;

				//tham chieu
				// function pow2(&$n1, $n2)
				//tham tri
				function pow2($n1, $n2)
				{
					$result = 0;
					$n1 *= $n1; 
					$n2 *= $n2;
					$result = $n1 + $n2; 

					return $result;
				}
				$n1 = 2;
				$n2 = 4;
				$number = pow2($n1, $n2);
				echo "Number: ". $number. "<br>";
				echo 'n1: '.$n1."<br>";
				echo 'n2: '.$n2."<br>";
			?>

		</div>
    
    <?php
        function sumDigit($number)
        {
          $sum = 0;
          while($number > 0)
          {
            $digit = $number % 10;
            $sum += $digit;
            $number = ($number - $digit) / 10; 
          }
          return $sum;
        }
        $result = sumDigit(18);
        echo $result;
      ?>

    <!-- ASNT kiem tra kieu du lieu-->
      <?php
        $n = 13;
        $str = "PHP";

        var_dump($n);
        var_dump($str);
        echo '<br>';
        echo gettype($n);
        echo '<br>';
        echo gettype($str);
        echo '<br>';

        if(is_numeric($str))
        {
          echo 'number <br>';
        }
        else
        {
          echo 'string <br>';
        }
      ?>
    <!-- array -->
      <?php
        $php = "PHP";
        $gey = "GEY";
        $less = "less";
        $courses = array();
        $courses[] = "PHP";
        $courses[] = "GEY";
        $courses[] = "less";

        //dem so phan tu 
        $length = count($courses);
        echo $length;

        // if($length > 0)
        // {
        //   echo 'khong phai mang rong';
        // }
        // else
        // {
        //   echo 'mang rong';
        // }

        //empty kiem tra mang rong hay khong
        if(!empty($courses))
        {
          echo 'khong phai mang rong';
        }
        else
        {
          echo 'mang rong';
        }

        //in phan tu trong mang
        echo "<pre>";
        print_r($courses);
        echo '</pre>';

        //mang so nguyen
        $courses = array();
        $courses[0] = "PHP";
        $courses[1] = "GEY";
        $courses[2] = "less";
        // or
        $courses = array("PHP", "binh", "nguyen");
        echo $courses[1] . '<br>';
        // in tat ca phan tu
        if(!empty($courses))
        {
          for($i = 0; $i < count($courses); $i ++)
          {
            echo $courses[$i]. '<br>';
          }
        }
        else
        {
          echo 'mang empty';
        }
        // vong lap foreach
        $courses = array("PHddP", "binddh", "ddnguyen");
        
        if(!empty($courses))
        {
          foreach($courses as $key => $value)
          {
            echo $value . '<br>';
          }
        }

        //mang ket hop
        $courses = array();
        $courses["cc"] = "PHP";
        $courses["cwc"] = "GEY";
        $courses["wcw"] = "less";
        $courses[] = "lescss";
        $courses[] = "lescsfeves";
        $courses[] = "lesevvevevess";
        echo '<pre>';
        print_r($courses);
        echo '</pre>';

        echo $courses['cwc'];
        //or
        $courses = array('cc' => "PHddP", 'cwc' => "binddh", 'wcw' => "ddnguyen");
        echo '<pre>';
        print_r($courses);
        echo '</pre>';
        echo '<hr>';
        if(!empty($courses))
        {
          foreach($courses as $key => $value)
          {
            echo $key . " => " .$value. '<br>';
          }
        }
        // mang da chieu
          //quan ly thong tin sinh vien
          $students = array();
          $students['sv01'] = array('name' => 'John', 'sex' => '1', 'score' => array('toan' => 9,'ly' => 8,'hoa' => 9));
          $students['sv02'] = array('name' => 'Peter', 'sex' => '1', 'score' => array('toan' => 9,'ly' => 9,'hoa' => 9));
          $students['sv03'] = array('name' => 'Mary', 'sex' => '0', 'score' => array('toan' => 9,'ly' =>10,'hoa' => 9));

          echo '<hr>';
          echo '<pre>';
          print_r($students);
          echo '</pre>';
          // or
          $students = array(
            "sv01" => array('name' => 'john',
                            'sex' => '1',
                            'score' => array(
                                              9,
                                              6,
                                              10
                                            )
                            ),
             "sv02" => array('name' => 'binh',
                            'sex' => '1',
                            'score' => array(
                                              10,
                                              8,
                                              10
                                            )
                            ),
             "sv03" => array('name' => 'thao',
                            'sex' => '0',
                            'score' => array(
                                              9,
                                              2,
                                              9
                                            )
                           )                                     
           );
           

          echo '<hr>';
          echo '<pre>';
          print_r($students);
          echo '</pre>';

          // //tim ten sv02
          // echo '<hr>';
          // echo '<pre>';
          // print_r($students['sv02']['name']);
          // echo '</pre>';

          // //diem thu 2 cua sinh vien 3
          // echo '<hr>';
          // echo '<pre>';
          // print_r($students['sv03']['score']['toan']);
          // echo '</pre>';

          // //thay doi ten sv03 
          // $students['sv03']['name'] = 'Thy';

          // echo '<hr>';
          // echo '<pre>';
          // print_r($students);
          // echo '</pre>';
          // //thay diem
          // $students['sv03']['score']['toan'] = '2';
          // echo '<hr>';
          // echo '<pre>';
          // print_r($students);
          // echo '</pre>';

          //tong so diem cua moi sinh vien
           //duyet mang

           if (!empty($students))
           {
             foreach($students as $key => $value)
             {
               $name =  $value['name'];
               $sex =  $value['sex'] == 1 ? 'boy' : 'girl';
               $score =  array_sum($value['score']);     
              //  $total = 0;   
              //  for($i = 0; $i < count($score); $i++)
              //  {
              //    $total += $score[$i];
              //  }       
               echo 'name: '.$name . '// sex: '. $sex . '// score: ' .$score . '<br>';
             }
           }
        // lay danh sach khoa va gia tri
          $courses = array('name' => 'php', 'time' => 200);
          echo '<hr>';
          echo '<pre>';
          print_r($courses);
          echo '</pre>';
          //lay gia tri
          $newarr = array_values($courses);
          
          echo '<hr>';
          echo '<pre>';
          print_r($newarr);
          echo '</pre>';
          //lay key
          $newarr = array_keys($courses);
          
          echo '<hr>';
          echo '<pre>';
          print_r($newarr);
          echo '</pre>';

        // loai bo phan tu cuoi dau mang
          //bo phan tu cuoi
          $courses = array('php','html', 'jquery', 'mysql');
          
          echo '<hr>';
          echo '<pre>';
          print_r($courses);
          echo '</pre>';
          //bo phan tu cuoi
          array_pop($courses);

          //bo phan tu dau
          array_shift($courses);
          echo '<hr>';
          echo '<pre>';
          print_r($courses);
          echo '</pre>';

          $courses = array('php','html', 'jquery', 'mysql');
           function removeItem(&$array, $type = 'first', $total = 2)
           {
              $result = array();
              if(!empty($array))
              {
                if($total >= count($array))
                {
                  $result = $array;
                  $array = null;
                }
                else
                {
                  if($type == 'first')
                  {
                    for($i = 1; $i <= $total; $i++)
                    {
                      $result[] = array_shift($array);
                    }
                  }
                  else if($type == 'last')
                  {
                    for($i = 1; $i <= $total; $i++)
                    {
                      $result[] = array_pop($array);
                    }
                  }
                }                
              }
              return $result;
           }
           $arrTemp = removeItem($courses, 'first', 3);

           echo '<hr>';
           echo 'arrTeam: <br>';
           echo '<pre>';
           print_r($arrTemp);
           echo '</pre>';

           echo 'courses: <br>' ;    
           echo '<pre>';
           print_r($courses);
           echo '</pre>';
        //loai bo phan tu trung nhau trong mang
        $courses = array('php','html', 'jquery', 'mysql', 'php','html');
        echo '<hr>';
        echo '<pre>';
        print_r($courses);
        echo '</pre>';
        //xoa bo phan tu trung lap
        $newarr = array_unique($courses);
        echo '<pre>';
        print_r($newarr);
        echo '</pre>';
        //loai bo array
        unset($courses[0], $courses[1]);
        echo '<pre>';
        print_r($courses);
        echo '</pre>';
        //them pha tu cuoi mang
        array_push($courses, 'http', 'css');
        //them phan tu dau mang
        array_unshift($courses, 'http', 'css');
        echo '<hr>';
        echo '<pre>';
        print_r($courses);
        echo '</pre>';
        // dao vi tri mang
        $courses = array('php','html', 'jquery', 'mysql', 'php','html');
        echo '<hr>';
        echo '<pre>';
        print_r($courses);
        echo '</pre>';
        $newarr = array_reverse($courses) ;

        echo '<pre>';
        print_r($newarr);
        echo '</pre>';

        //hoan doi key value
        $courses = array('php','html', 'jquery', 'mysql', 'php','html');
        echo '<hr>';
        echo '<pre>';
        print_r($courses);
        echo '</pre>';
        $newarr = array_flip($courses) ;

        echo '<pre>';
        print_r($newarr);
        echo '</pre>';

        //tinh tong mang
        $score = array(2,3,5,1,3,5,7,2);
        $sum = array_sum($score);
        //gia tri trung binh
        $length = count($score);
        //gia tri lon nhat
        $max = max($score);
        //gia tri lon nhat
        $min = min($score);
        
        echo '<hr>';
        echo '<pre>';
        print_r($score);
        echo '</pre>';
        echo'trung binh: '. $sum/$length.'<br>';
        echo'tong: '. $sum.'<br>';
        echo'max: '. $max.'<br>';
        echo'min: '. $min.'<br>';

        //tong cac gia tri lap
        $newarr = array_count_values($score);
        echo '<pre>';
        print_r($newarr);
		echo '</pre>';
		
		//ket hop 2 mang
			$array1 = array('a', 'b', 'c');
			$array3 = array('php' => 'PHP', 'binh' => 'nguyen');
			$array2 = array(2, 4, 6);

			$newarr = array_merge($array1, $array2, $array3);

			echo '<hr>';
			echo '<pre>';
			print_r($newarr);
			echo '</pre>';
			
			//lay chi so key
			$array31 = array('pv' => 'PHPd', 'php' => 'PHP', 'binh' => 'nguyen');
			$keyarr = array_rand($array31, 2);
			
			echo '<hr>';
			echo '<pre>';
			print_r($keyarr);
			echo '</pre>';
		//tim phan tu trong mang
		$array31 = array('pv' => 'PHPd', 'php' => 'PHP', 'Binh' => 'nguyen');
		$key1 = array_search('nguyen', $array31);
		echo '<hr>';
		echo '<pre>';
		print_r($key1);
		echo '<br>';
		echo '</pre>';

		//kiem tra key value co ton tai trong mang
			if(array_key_exists('php', $array31))
			{
				echo 'key exitst <br>';
			}
			//kiem gia tri
			if(in_array('nguyen',$array31))
			{
				echo 'value exitst <br>';
			}
			//chuyen doi key thanh chu hoa thuong
			$change = array_change_key_case($array31, CASE_UPPER);
			echo '<hr>';
			echo '<pre>';
			print_r($change);
			echo '<br>';
			echo '</pre>';

			//truyen ky tu vao mang
		$array31 = array('pv', 'PHP', 'Binh','nguyen');
		$str = implode('--', $array31);
		echo '<hr>';
		echo '<pre>';
		print_r($str);
		echo '<br>';
		echo '</pre>';

		// dua chuoi vao mang
		$full = 'nguyen van binh';
		$ar = explode(' ', $full);

		echo '<hr>';
		echo '<pre>';
		print_r($ar);
		echo '<br>';
		echo '</pre>';
		// truy suat phan tu mang
		$ar1 = array('pv', 'PHP', 'Binh','nguyen');
		echo '<hr>';
		echo '<pre>';
		print_r($ar1);
		echo '<br>';
		echo '</pre>';	
		//ts ptu hien tai
		echo 'Current: '. current($ar1). '<br>';
		//ts ptu sau ptu hien tai
		echo 'next: '. next($ar1). '<br>';
		//ts ptu truoc phan tu hien tai
		echo 'prev: '. prev($ar1). '<br>';
		//ts quay ve phan tu dau tien trong mang
		echo 'reset: '. reset($ar1). '<br>';
		//ts phan tu cuoi mang
		echo 'end: '. end($ar1). '<br>';

		//chuyen doi mang ve chuoi dac biet
		$courses= array('pv' => 'PHPd', 'php' => 'PHP', 'Binh' => 'nguyen');
		
		$result = serialize($courses);
		echo $result . '<br>';

		//chuyen ve trang thai ban dau

		$result = 'a:3:{s:2:"pv";s:4:"PHPd";s:3:"php";s:3:"PHP";s:4:"Binh";s:6:"nguyen";}';

		$arr = unserialize($result);
		echo '<hr>';
		echo '<pre>';
		print_r($arr);
		echo '<br>';
		echo '</pre>';

		//xao tron phan tu trong mang
		$arr = array(1,2,3,4,5,6,7,8,9);
		shuffle($arr);
		echo '<hr>';
		echo '<pre>';
		print_r($arr);
		echo '<br>';
		echo '</pre>';

		//tao mang tu cac bien
		$name = 'php';
		$time = 100;
		$arr = compact('name', 'time');
		echo '<hr>';
		echo '<pre>';
		print_r($arr);
		echo '<br>';
		echo '</pre>';

		//tao mang su dung ham range

		$arr = range(1,10,2);
		echo '<hr>';
		echo '<pre>';
		print_r($arr);
		echo '<br>';
		echo '</pre>';

		//tao mang bang array_combine
		$key = array('name', 'time', 'total');
		$value = array('php', 100, '2000');

		$narr = array_combine($key, $value);
		echo '<hr>';
		echo '<pre>';
		print_r($narr);
		echo '<br>';
		echo '</pre>';

		//so sanh khac nhau giua 2 mang
		$arr1 = array('name' => 'php', 'time' => 120, 'zen','juma');
		$arr2 = array('php', 100, 'time' => 120);
		//lay phan tu arr1 khong ton tai trong arr2
		$diff = array_diff($arr1, $arr2);
		//tra ve khoa chi ton tai trong arr1
		$diff2 = array_diff_key($arr1, $arr2);
		//tra ve khoa phan tu chi ton tai trong arr1
		$diff3 = array_diff_assoc($arr1, $arr2);
		
		echo '<hr>';
		echo '<pre>';
		print_r($arr1);
		echo '<br>';
		echo '<pre>';
		print_r($arr2);
		echo '<br>';
		echo '<pre>';
		print_r($diff);
		echo '<br>';
		echo '</pre>';
		echo '<hr>';
		echo '<pre>';
		print_r($diff2);
		echo '<br>';
		echo '</pre>';
		echo '<hr>';
		echo '<pre>';
		print_r($diff3);
		echo '<br>';
		echo '</pre>';
		//so sanh giong nhau giua 2 mang
		$arr111 = array('name' => 'php', 'time' => 120, 'zen','juma');
		$arr222 = array('php', 100, 'time' => 120);
		//lay phan tu giong nhau
		$diff = array_intersect($arr111, $arr222);
		//lay key giong nhau
		$diff2 = array_intersect_key($arr111, $arr222);
		//lay key phan tu gong nhau
		$diff3 = array_intersect_assoc($arr111, $arr222);		
		echo '<hr>';
		echo '<pre>';
		print_r($diff);
		echo '<br>';
		echo '</pre>';
		echo '<hr>';
		echo '<pre>';
		print_r($diff2);
		echo '<br>';
		echo '</pre>';
		echo '<pre>';
		print_r($diff3);
		echo '<br>';
		echo '</pre>';

		//xu ly gia tri mang
		$arr111 = array('name' => 'php', 'time' => 120, 'zen','juma');
		
		// foreach ($arr111 as $key => $value)
		// {
		// 	echo $key . ' : ' .$value. '<br>';
		// }
		function myf($value, $key, $param)
		{
			echo $key .  $param  .$value. '<br>';
		}
		array_walk($arr111,'myf', ' - ');

		$arr = array(2,4,6,8);

		function mf(&$value, $key, $param = 2)
		{
			$value *= $param;
			
		}
		array_walk($arr,'mf');

		echo '<hr>';
		echo '<pre>';
		print_r($arr);
		echo '<br>';
		echo '</pre>';

		//array_map

		$array = array(2,3,1);
		$narr = array();
		foreach ($array as $key => $value)
		{
			$narr[] = ($value % 2 == 0) ? 'even' : 'odd';
		}

		echo '<hr>';
		echo '<pre>';
		print_r($array);
		echo '<br>';
		echo '</pre>';
		echo '<pre>';
		print_r($narr);
		echo '<br>';
		echo '</pre>';

		function chen($number)
		{
			$result = ($number % 2 == 0) ? 'even' : 'odd';
			return $result;
		}

		$narr = array_map('chen', $array);

		echo '<hr>';
		echo '<pre>';
		print_r($array);
		echo '<br>';
		echo '</pre>';
		echo '<pre>';
		print_r($narr);
		echo '<br>';
		echo '</pre>';

		$array1 = array(2,3,1);
		$array2 = array(7,8,9);
		function myft($num1, $num2)
		{
			$result = $num1 * $num2;
			return $result;
		}

		$narr = array_map('myft', $array1, $array2);
		echo '<hr>';
		echo '<pre>';
		print_r($narr);
		echo '<br>';
		echo '</pre>';

		//trich 1 doan phan tu cua mang
		$array = array('a','b','c','d','e');

		$newarr = array_slice($array, 2);
		$newarr = array_slice($array, 2, 2, true);
		echo '<hr>';
		echo '<pre>';
		print_r($newarr);
		echo '<br>';
		echo '</pre>';
		//thay the 1 doan phan tu cua mang
		$array = array('a','b','c','d','e');

		echo '<hr>';
		echo '<pre>';
		print_r($array);
		echo '<br>';
		echo '</pre>';
		//loai bo phan tu thu 2 thay the mang 
		$newarr = array_splice($array, 2,1, array(7,8));
		echo '<pre>';
		print_r($newarr);
		echo '<br>';
		echo '</pre>';


		echo '<pre>';
		print_r($array);
		echo '<br>';
		echo '</pre>';

		// sap xep mang
		$array = array(1,4,2,14,29,23);
		echo '<hr>';
		echo '<pre>';
		print_r($array);
		echo '<br>';
		echo '</pre>';
		//tan dan
		sort($array);

		echo '<hr>';
		echo '<pre>';
		print_r($array);
		echo '<br>';
		echo '</pre>';
		//giam dan
		rsort($array);

		echo '<hr>';
		echo '<pre>';
		print_r($array);
		echo '<br>';
		echo '</pre>';

		//sap xem theo khoa
		$array = array('f' => 'php', 'd'=>80,'g' => 100);
		echo '<hr>';
		echo '<pre>';
		print_r($array);
		echo '<br>';
		echo '</pre>';
		//tan dan
		ksort($array);

		echo '<hr>';
		echo '<pre>';
		print_r($array);
		echo '<br>';
		echo '</pre>';
		//giam dan
		krsort($array);

		echo '<hr>';
		echo '<pre>';
		print_r($array);
		echo '<br>';
		echo '</pre>';
    ?>

		<!-- bai tap array -->
			<style>
				*{
					margin: 0;
					padding: 0;
				}
				.contentt{
					width: 500px;
					padding: 10px;
					border: 2px solid #ddd;
					height: auto;
					margin: 10px auto;
				}
			</style>
			<div class="contentt">
				<?php
					$group = array('1' => 'Admin', '2' => 'Manager', '3' => 'Member', '4' => 'Guest');
					$city = array('ct' => 'can tho', 'qt' => 'quang tri', 'h' => 'hue', 'hn' => 'hanoi');

					function createSelectBox($name, $attributes, $array, $keyselect)
					{
						$xhtml = '';
						if(!empty($array))
						{
							$xhtml .= '<select name="'.$name.'" id="'.$name.'" style="'.$attributes.'">';
							foreach($array as $key => $value)
							{
								if($key == $keyselect)
								{
									$xhtml .= '<option value="'.$key.'" selected="selected">'.$value.'</option>';
								}
								else
								{
									$xhtml .= '<option value="'.$key.'">'.$value.'</option>';
								}
							}
							$xhtml .= '</select>';
						}
						return $xhtml;
					}

					$groupSelect = createSelectBox('group', 'width: 200px;', $group, 4);
					$city = createSelectBox('city', 'width: 200px;', $city, 'qt');

					echo $groupSelect . '<br>';
					echo $city;
				?>
			</div>
		<!-- string -->
		  <?php
				//khai bao
				$str = '\'php\' \'string\'\\ <br>';
				echo $str;
				//noi chuoi
					echo 'php'. ' string';
					$php = '<br> php';
					$string = ' string';
					echo $php . $string . '<br>';
					//phan biet + .
					$case = 'php ' . 'easy' . '<br>';
					$case1 = 1 . 2;
					$case2 = 1.2;
					$case3 = 1 + 2;
					echo $case;
					var_dump($case1) . '<br>';
					var_dump($case2) . '<br>';
					var_dump($case3) . '<br>';
					//ham noi chuoi
					function joinString($str1, $str2, $joinCharacter = ' ')
					{
						$result = $str1 . $joinCharacter . $str2;
						return $result;
					}
					$result = joinString('php', 'string', '+');
					echo $result . '<br>';
				//dem so chuoi
					$str = 'php is easy';
					$length = strlen($str);
					echo $length . '<br>';
					//dem tu
					$str = 'php is easy';
					$wordCount = str_word_count($str);
					echo $wordCount . '<br>';
				//chuyen chu hoa thanh thuong va nguoc lai
					$str = 'Nguyen van binh';
					//in hoa 
					$upper = strtoupper($str);
					//in thuong
					$lower = strtolower($str);
					//in hoa chu cai dau
					$first = ucfirst($str);
					//in thuong chu cai dau
					$lfirst = lcfirst($str);
					//in hoa tat ca chu cai dau
					$ucw = ucwords($str);
					echo $upper . '<br>';
					echo $lower . '<br>';
					echo $first . '<br>';
					echo $lfirst . '<br>';
					echo $ucw . '<br>';
				//xac dinh vi tri
					$str = 'hello php, php is easy';
					$word = 'php';
					echo $str[6]. '<br>';
					//chi so xuat hien dau tien
					echo stripos($str, $word) . '<br>';
					//chi so xuat hien cuoi cung
					echo strripos($str, $word) . '<br>';
				//dao nguoc chuoi
					$str = 'php is easy';
					$result = strrev($str);
					echo $result . '<br>';
				//trich xuat noi dung
					$str = 'hello php, php is easy';
					echo substr($str, 2, 5) . '<br>';
					echo substr($str, -3, 2) . '<br>';
				//xoa bo ky tu 
					//xoa ben trai chuoi
					$str = 'hei ejlk   ';
					echo $str . '<br>';
					echo strlen($str) . '<br>';
					$str = ltrim($str, 'hei');
					echo $str . '<br>';					
					echo strlen($str) . '<br>' ;
					//xoa ben phai chuoi
					$str = 'hei ejlk   ';
					echo $str . '<br>';
					echo strlen($str) . '<br>';
					$str = rtrim($str,'k   ');
					echo $str . '<br>';					
					echo strlen($str) . '<br>' ;
					//xoa 2 ben
					$str = '   hei ejlk   ';
					echo $str . '<br>';
					echo strlen($str) . '<br>';
					$str = trim($str);
					echo $str . '<br>';					
					echo strlen($str) . '<br>' ;
					//bt
					$str = '      php     is         easy';
					$str = trim($str);
					$arr = explode(' ', $str);

					foreach($arr as  $key => $value)
					{
						if( trim($value) == null) unset($arr[$key]);
					}
					print_r($arr);
					$str = implode(' ', $arr);
					echo $str. '<br>' . strlen($str) . '<br>';
				//kiem tra chuoi khac rong
					$str09 = '0';
					// if(!isset($str) || trim($str) == '')
					// {
					// 	echo 'empty';
					// }
					// else
					// {
					// 	echo 'no empty';
					// }
					//or ko nen dung
					if(empty($str09))
					{
						echo 'empty <br>';
					}
					else
					{
						echo 'no empty <br>';
					}
				//chuyen doi 
					$arr = array("yellow", "pink", "blue");
					print_r($arr);
					//arr thanh chuoi
					$str = implode('+', $arr);
					echo $str . '<br>';
					//chuoi thanh arr
					$arr = explode("+", $str);
					print_r($arr); 
				//trich xuat noi dung trong chuoi
					$str = 'php is easy';
					echo $str . '<br>';
					echo substr($str, 0, 3) . '<br>';
					echo substr($str, 3, -3) . '<br>';
					echo substr($str, -3, 3) . '<br>';
					echo substr($str, -3, 0) . '<br>';
					echo substr($str, -3, -3) . '<br>';
				//rut gon chuoi
					$str = 'chi xuat hien 50 ky tu dau nhe, may ky tu sau nay khong nen xuat hien dau nhe. chi xuat hien 50 ky tu dau nhe, may ky tu sau nay khong nen xuat hien dau nhe';
					function truncateString($str, $maxChars = 50, $holder = '...')
					{
						$result = $str;
						if(strlen($str) > $maxChars)
						{
							$result = substr($str, 0, $maxChars). $holder;
						}
						return $result;
					}
					$str = truncateString($str, 50, '...');
					echo $str . '<br>';
				//lap chuoi
					$str = "++";
					$case = str_repeat($str, 5);
					echo $case . '<br>';
				//ky tu ascii
					echo chr(84) . '<br>';
					$str34 = "php is easy";
					echo ord($str34) . '<br>';
				//phan tich chuoi trong truy van
					$str12 = "name=peter&age=23";
					parse_str($str12, $array);
					// echo $name . '<br>';
					// echo $age . '<br>';
					print_r($array) . '<br>';
				//phan tich url
					$str = "https://www.binhnguyen.com/websever.php?id=79&page=2#item1";
					$data = parse_url($str);
					print_r($data);
				//truy xuat noi dung
					$url = "http://201.245.126.171/Music/NhacTre/TinhYeu_LyMaiTrang/wma32/06_BienTham_TinhYeu_LyMaiTrang.wma"; 
					//cach 1
					// function getInfo1($url)
					// {
					// 	$info = explode("/", $url);
					// 	$result = $info[count($info) - 1];
				 	// 	return $result;
					// }
					// //cach 2
					// function getInfo2($url)
					// {
					// 	$arrayUrl = parse_url($url);
					// 	$info = explode("/", $arrayUrl["path"]);
					// 	echo $result = $info[count($info) - 1];	
					// }				
					// print_r($info);
					//cach 3
					function getInfo3($url)
					{
						$index = strripos($url, "/");
						$result = substr($url, $index + 1);
						return $result;
					}
					$info = getInfo3($url);
					$result = array();
					$arrInfo = explode('_', $info);
					//id
					$result['id'] = $arrInfo[0]; 
					//type
					$arrType = explode(".", $arrInfo[3]); 
					$result['type'] = $arrType[1];
					//name, audio ,singer
					$arrInfo[3] = $arrType['0'];
					function format($str)
					{
						$result = $str[0];
						for($i = 1; $i < strlen($str); $i ++)
						{
							if(ctype_upper($str[$i]) == true)
							{
								$result .= ' ' . $str[$i]; 
							}
							else
							{
								$result .= $str[$i];
							}
						}
						return $result;
					}
					$result['singer'] = format($arrInfo[3]);
					$result['name'] = format($arrInfo[1]);
					$result['album'] = format($arrInfo[2]);
					print_r($result);
				//so sanh 2 chuoi
					$str1 = "Php is";
					$str2 = "Php is";
					$result = strcmp($str1, $str2);
					echo $result . '<br>';

					$str1 = "Php is easy";
					$str2 = "easy";
					$result = substr_compare($str1, $str2, -4, 4);
					echo $result . '<br>';
				//tang do dai chuoi
					$str = 'php is easy';

					$str = str_pad($str, 30, ".", STR_PAD_BOTH);
					echo $str . '<br>';
				//sap sep ngau nhien
					$str = 'php is easy';
					$str = str_shuffle($str);
					echo $str . '<br>';
				//tim kiem thay the chuoi
					$str = 'php is eaasy';
					$str = str_replace("php", "java", $str);
					echo $str . "<br>";

					$array = array("php", 'java', 'html', 'jquery');
					$array = str_replace("php", "css", $array);
					print_r($array);
				//dem so lan xuat hien chuoi con
					$str = 'this is test';
					$index = substr_count($str, 'is');
					$index = substr_count($str, 'is', 3);
					echo $index . '<br>';
				//cat chuoi
					$str = 'this is a test';
					$array = str_split($str, 3);
					echo '<pre>';
					print_r($array);
					echo '</pre>';			
				//chuan hoa
					$str = '  nguyen    VAn   An ';
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
					$result = formatString($str, 'danh-tu');
					echo $result . '<br>';
					echo strlen($result) . '<br>';
				//thao tac voi ki tu gach cheo
					$str = "'php' \is easy\ ";
					$str = addslashes($str);
					$str = addcslashes($str, "s");
					$str = stripslashes($str);
					echo $str . "<Br>";
        //html entity
          $str = '<b>php</b> is easy';
          echo 'input: ' . $str . '<br>';
          echo 'output: ' . htmlspecialchars_decode($str) . "<br>";
          $str1 = '<b>php</b> is easy ©';          
          echo 'output: ' . htmlentities($str1) . "<br>";
          $str2 = '<b>php</b> is easy';          
          echo 'output: ' . strip_tags($str2) . "<br>";
        //doc so co ba chu so
          $arrNumber = array(
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
          function readNumber3Digit($number, $dictionaryNumber, $readFull = true)
          {
            $number = strval($number);
            $number = str_pad($number, 3, 0, STR_PAD_LEFT);
                $digit_0 = substr($number, 2, 1);
                $digit_00 = substr($number, 1, 1);
                $digit_000 = substr($number, 0, 1);

                $str_000 = $dictionaryNumber[$digit_000] . ' trăm ';
                $str_00 = $dictionaryNumber[$digit_00] . ' mươi ';
                if($digit_00 == 0) $str_00  = 'lẻ ';
                if($digit_00 == 1) $str_00  = 'mười ';
                $str_0 = $dictionaryNumber[$digit_0];
                if($digit_00 > 1 && $digit_0 == 1) $str_0  = 'mốt ';           
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
                $result = $str_000 . $str_00 . $str_0;
                return $result;
          }
          
          $number = 651;
          $result = readNumber3Digit($number, $arrNumber, false);
          echo "Input: " . $number . '<br>';
          echo "Output: " . $result . '<br>';
          
			?>
	</body>
</html>