<?php

  $data = file('question.txt') or die('cannot read file');

  array_shift($data);

  $arrQ =  array();

  foreach($data as $key => $value)
  {
    $tmp = explode('|', $value);

    $id = $tmp[0];
    $question = $tmp[1];
    $arrQ[$id] = array("question" => $question);

  }

?>