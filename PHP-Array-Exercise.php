<?php
  //kahhi bao mang
  $arr = array("white ", "blue ", "green ", "yellow ", "red ");
  //dung vong lap foreach de lap phan tu
  foreach($arr as $c){
    echo "$c";
  }
  //sap xep cac phan tu mang
  sort($arr);
  //in mang
  echo "<ul>";
  foreach($arr as $y){
    echo "<li>$y</li>";
  }
  echo "</ul>";
?>