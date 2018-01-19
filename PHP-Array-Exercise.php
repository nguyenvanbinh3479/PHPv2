<!-- tao mang don gian -->
  <h2>tao mang</h2>
  <?php
    //khai bao mang
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
<!-- tao mang lien hop -->
  <h2>mang lien hop</h2>
  <?php
    //khai bao mang
    $manglh =  array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg",  
      "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",  
      "Finland"=>"Helsinki", "France" => "Paris",  
      "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",  
      "Germany" => "Berlin", "Greece" => "Athens",  
      "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
      "Austria" => "Vienna", "Poland"=>"Warsaw");
    //sap xep mang
      asort($manglh);
    //lap phan tu mang
    foreach($manglh as $country => $capital)
    {
      echo "thu do cua $country la $capital" ."<br>";
    }
  ?>
<!-- xoa phan tu mang -->
  <h2>xoa phan tu mang</h2>    
  <?php
    $x = array(0,1,2,3,4);
    var_dump($x);
    echo '<br>';
    unset($x[3]);
    $x = array_values($x);
    echo '';
    var_dump($x);
    echo '<br>';
  ?>
<!-- lay phan tu dau tien trong mang -->
  <h2>lay phan tu dau tien</h2>
    <?php
      $color = array(1 => 'white', 5 => 'green', 9 => 'red');
      var_dump($color);
      echo '<br>';
      echo reset($color);
      echo '<br>';
    ?>
<!-- chen phan tu vao mang -->
  <h2>chen phan tu</h2>
    <?php
      $mbd = array('1','2','3','4','5');
      echo 'mang bat dau: <br>';
      foreach($mbd as $x)
      {
        echo "$x <br>";
      } 
      $ptcc = '$';
      array_splice($mbd, 3, 0, $ptcc);
      foreach($mbd as $x)
      {
        echo "$x <br>";
      }
    ?>