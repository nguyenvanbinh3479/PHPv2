<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<?php
		require_once 'functionA.php';
		require_once 'functionB.php';
	?>
	<!-- question -->
	<div class="contentQ">
		<h1>Trắc nghiệm tính cách</h1>
			<form action="" method="POST">
				<div class="question">
					<p>
						<span>Câu hỏi 1: </span> Bạn cảm thấy dễ chịu nhất khi nào?
					</p>
					<ul>
						<li><label><input type="radio" name="01" value ="2">Vào buổi sáng</label></li>
						<li><label><input type="radio" name="01" value ="4">Vào buổi chiều và chớm tối</label></li>
						<li><label><input type="radio" name="01" value ="6">Vào đêm muộn</label></li>
					</ul>
				</div>
				<div class="question">
					<p>
						<span>Câu hỏi 2: </span> Bạn thường bước đi:
					</p>
					<ul>
						<li><label><input type="radio" name="02" value ="6">Khá nhanh với bước chân dài</label></li>
						<li><label><input type="radio" name="02" value ="4">Khá nhanh với bước chân ngắn</label></li>
						<li><label><input type="radio" name="02" value ="7">Không nhanh lắm, đầu ngẩng cao, hướng mặt ra cả thế giới</label></li>
						<li><label><input type="radio" name="02" value ="2">Không nhanh lắm, đầu cúi xuống</label></li>
						<li><label><input type="radio" name="02" value ="1">Rất chậm</label></li>
					</ul>
				</div>
				<input type="submit" value="Kiểm tra" name="submit">
			</form>
	</div>
</body>
</html>