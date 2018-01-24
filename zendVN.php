<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="public/css/bootstrap.min.css">
		<link rel="stylesheet" href="public/js/bootstrap.min.js">
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
				height: 400px;
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
					$money = '';
					if(isset($_POST['money'])) $money = $_POST['money'];
				?>
					<div class="info">
						<img src="public/images/bocap.png" alt="atm">
						<h1>Mô phỏng máy ATM</h1>
						<form action="#" method="post">
							<p>Vui lòng nhập vào số tiền mà quý khách muốn thực hiện giao dịch</p>
							<input type="text" name="money" value="">
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
					
					<div class="normal">
						<p class="col1">500.000</p>
						<p class="col2">6</p>
						<p class="col3">3.000.000</p>
					</div>
					<div class="clr"></div>

					<div class="normal">
						<p class="col1">200.000</p>
						<p class="col2">2</p>
						<p class="col3">400.000</p>
					</div>
					<hr>
					<p class="total">Tổng tiền: 234.567.000</p>
					</div><!-- .result -->
				</div>
		</div>
	</body>
</html>