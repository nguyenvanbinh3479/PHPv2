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
			<form action="result.php" method="POST" name ="mainForm">
				<?php
				$i = 1;
					foreach($newarr as $key => $value)
					{
						echo '<div class="question">';
						echo '<p>
										<span>Câu hỏi '.$i.': </span> '.$value['question'].'
									</p>';
						echo '<ul>';
							foreach($value['sentences'] as $keyC => $valueC )
							{
								echo '<li><label><input type="radio" name="'.$key.'" value ="'.$valueC['point'].'">'.$valueC['option'].'</label></li>';
							}
						echo '</ul>';
						echo '</div>';
						$i++;
					}	
					
					echo '<input type="submit" value="Kiểm tra" name="submit">';
				?>				
			</form>
	</div>
</body>
</html>