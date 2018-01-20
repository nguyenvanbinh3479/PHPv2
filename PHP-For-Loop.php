<!-- hien thi 1-2-3-4-5-6-7-8-9-10 -->
  <h1>hien thi so tu 1 toi 10</h1>
    <?php
      for ($i = 0; $i < 10; $i++)
      {
        echo $i . "-";
      }
        echo $i;
    ?>
<!-- tinh tong day so tu 1-20 va hien thi ket qua -->
  <h1>tinh tong day tu 1 - 20</h1>
    <?php
      $tong = 0;
      for ($a = 1; $a <= 20; $a++)
      {
        $tong += $a;
      }
      echo $tong;
    ?>
<!-- ve tam giac vuong -->
  <h1>ve tam giac vuong</h1>
    <?php
      for($b = 1; $b <= 5; $b++)
      {
        for($c = 1; $c <= $b; $c++)
        {
          echo '*';
          if ($c < $b)
          {
            echo " ";
          }
        }
        echo '<br>';
      }
    ?>
<!-- tam giac nguoc -->
  <h1>ve tam giac nguoc</h1>
    <?php
      for($i = 1; $i <= 5; $i++)  
      {  
        for($j = 1; $j <= $i; $j++)  
        {  
          echo ' * ';  
        }  
        echo '<br>';  
      }  
      for($i = 4; $i >= 1; $i--)  
      {  
        for($j = 1; $j <= $i; $j++)  
        {  
          echo ' * ';  
        }  
        echo '<br>';  
      } 
    ?>