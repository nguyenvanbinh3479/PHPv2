<?php

  $data = file('options.txt') or die('cannot read file');

  array_shift($data);

  $arrO = array();
  foreach($data as $key => $value)
  {
    $tmp = explode('|', $value);

		$questionID = $tmp[0];
		$optionID = $tmp[1];
		$answer = $tmp[2];
		$point = $tmp[3];

		$arrO[$questionID][$optionID]['option'] = $answer;
		$arrO[$questionID][$optionID]['point'] = $point;

	}

?>