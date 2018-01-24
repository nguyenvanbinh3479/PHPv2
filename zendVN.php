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
</div>
</body>
</html>