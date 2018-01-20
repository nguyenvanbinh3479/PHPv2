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
<!-- tinh giai thua -->
  <h1>tinh giai thua</h1>
    <?php
      $n = 7;
      $x = 1;
      for($i = 1; $i<= $n-1; $i++)
      {
        $x *= ($i + 1);
      }
      echo "giai thua cua $n = $x <br>";
    ?>
<!-- dem 1 ky tu xuat hien bao nhieu lan trong chuoi -->
  <h1>dem ky tu trong chuoi</h1>
    <?php
      $sbd = "binhnguyen";
      $ktcd = "n";
      $count = 0;
      for ($x = 0; $x < strlen($sbd); $x++)
      {
        if(substr($sbd, $x, 1) == $ktcd)
        {
          $count += 1;
        }
      }
      echo "co " .$count. " ky tu " .$ktcd. " trong chuoi ' " .$sbd." '"; 
    ?>
<!-- bang cuu chuong -->
  <h1>bang cuu chuong</h1>
    <table align="left" border="1" cellpadding="3" cellspacing="0">  
      <?php  
        for ($i = 1; $i <= 10; $i++)  
        {
          echo "<tr>";
          for($j = 2; $j <= 9; $j++)
          {
            echo "<td> $j * $i = ".$j * $i."</td>";
          }
          echo "</tr>"; 
        }
      ?>  
    </table> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- ban co vua -->
  <h1>ban co vua</h1>
    <table width="270px" cellspacing="0" cellpadding="0" border="1px">
      <?php
        for ($row = 1; $row <= 8; $row++)
        {
          echo "<tr>";
            for ($col = 1; $col <= 8; $col++)
            {
              $total = $row + $col;
              if($total % 2 == 0)
              {
                echo "<td height=30px width=30px bgcolor=#fff></td>";
              }
              else
              {
                echo "<td height=30px width=30px bgcolor=#000></td>";                
              }
            }
          echo "</tr>";
        }
      ?>
    </table>
<!-- ve tam giac floyd -->
  <h1>ve tam giac floyd</h1>
    <?php
      $n = 10;
      echo "<h2>n = " .$n. "</h2><br>";
      $count = 1;
      for ($i = $n; $i > 0; $i--)
      {
        for ($j = $i; $j < $n + 1; $j++)
        {
          printf("%4s", $count);
          $count++;
        }
        echo "<br>";
      }
    ?>