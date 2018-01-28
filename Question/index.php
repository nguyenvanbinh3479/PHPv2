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

		$newarr = array();

		foreach($arrQ as $key => $value)
		{
			$newarr[$key]['question'] = $value['question'];
			$newarr[$key]['sentences'] = $arrO[$key];
		}
		
	?>
	<!-- question -->
	<div class="contentQ">
		<h1>Trắc nghiệm tính cách</h1>
			<form action="" method="POST">
				<?php
					foreach($newarr as $key => $value)
					{
						echo '<div class="question">';
						echo '<p>
										<span>Câu hỏi 1: </span> Bạn cảm thấy dễ chịu nhất khi nào?
									</p>';
						echo '<ul>
										<li><label><input type="radio" name="01" value ="2">Vào buổi sáng</label></li>
										<li><label><input type="radio" name="01" value ="4">Vào buổi chiều và chớm tối</label></li>
										<li><label><input type="radio" name="01" value ="6">Vào đêm muộn</label></li>
									</ul>';
						echo '</div>';
						echo '<input type="submit" value="Kiểm tra" name="submit">';
					}	
				?>				
			</form>
	</div>
</body>
</html>