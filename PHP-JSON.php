<!-- decode 1 chuoi json -->
	<h1>decode json</h1>
	<?php
		$json = '{
			"user": "nam",
			"country": "vietnam",
			"sex": "male"
		}';
		var_dump(json_decode($json));
		echo '<br>';
		var_dump(json_decode($json, true));
	?>
<!-- bieu dien gia tri cua 1 mang duoi dang json -->
  <h1>bieu dien gia tri cua 1 mang duoi dang json</h1>
		<?php
			$arr = array("user" => "nam", "country" => "vietnam", "sex" => "male");
			$myarray = array('red', 'green', 'white');
			var_dump(json_encode($arr));
			echo '<Br>';
			var_dump(json_encode($myarray));
		?>
<!-- hien thi cac loi trong qua trinh decode -->
	<h1>hien thi cac loi trong qua trinh decode</h1>
		<?php
			function json_error_message($json_str)
			{
				$json[] = $json_str;
				echo $json;
				foreach($json as $string)
				{
					echo 'decoding '.$string."<br>";
					json_decode($string);
					switch(json_last_error())
					{
						case JSON_ERROR_NONE:
							echo ' - no errors'.'<br>';
							break;
						case JSON_ERROR_DEPTH:
							echo ' - Maximun stack depth exceeded'.'<br>';
							break;
						case JSON_ERROR_STATE_MISMATCH:  
							echo ' - Underflow or the modes mismatch'."<br>";  
							break;  
						case JSON_ERROR_CTRL_CHAR:  
							echo ' - Unexpected control character found'."<br>";  
							break;  
						case JSON_ERROR_SYNTAX:  
							echo ' - Syntax error, malformed JSON'."<br>";  
							break;  
						case JSON_ERROR_UTF8:  
							echo ' - Malformed UTF-8 characters, possibly incorrectly encoded'."<br>";  
							break;  
						default:  
							echo ' - Unknown error'."<br>";  
							break;  
					}
				}
			}
			json_error_message('{"color1": "red color"}');
		?>