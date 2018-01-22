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