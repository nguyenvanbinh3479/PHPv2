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

		$data = file('question.txt') or die ('cannot read file');

		$point = 0;

		array_shift($data);

		foreach($data as $key => $value)
		{
			$tmp = explode("|", $value);
			$id = $tmp[0];
			$point = $point + $_POST[$id];
		}

		$data = file('result.txt') or die ('cannot read file');
		
		array_shift($data);

		foreach($data as $key => $value)
		{
			$tmp = explode("|", $value);
			$min = $tmp[0];
			$max = $tmp[1];
			$content = $tmp[2];
			if($point >= $min && $point <= $max)
			{
				$result = $content;
				break;
			}
		}
		
  ?>
  <div class="content">
    <h1>Kết quả trắc nghiệm tính cách</h1>
		<p><b>Tổng số điểm của bạn là: </b><?php echo $point;?></p>
		<p style="margin-top: 20px; text-align: justify"><b>Kết quả trắc nghiệm: </b><?php echo $result;?></p>
  </div>
</body>
</html>