<!-- kiem tra 1 chuoi co chuwa chuoi khac khong -->
  <h1>kiem tra chuoi co chua chuoi</h1>
    <?php
      $pattern = '/[^\w]tap\s/';
      $str = 'tuyen tap php co ban va nang cao';
      echo $str.'<br>';
      if (preg_match($pattern, $str))
      {
        echo "chuoi 'tap' xuat hien trong chuoi tren";
      }
      else
      {
        echo "chuoi 'tap' khong xuat hien trong chuoi tren";
      }
    ?>
<!-- xoa tu cuoi cung tu 1 chuoi da cho -->
  <h1>xoa tu cuoi 1 chuoi</h1>
    <?php
      $str = 'tuyen tap cac bai php co bang va nang cao';
      echo $str . '<br>';
      echo preg_replace('/\W\w+\s*(\W*)$/', '$1', $str).'<br>';
    ?>
<!-- xoa tat ca khoang trong trong chuoi -->
  <h1>xoa khoang trong trong mang</h1>
    <?php
      $str1 = "tuyen tap php co ban nang cao";
      echo preg_replace('/\s+/', '', $str1).'<br>';
    ?>
<!-- xoa tat ca cac ky tu khong phai so tru phay va cham -->
  <h1>xoa ky tu khong phai so</h1>
    <?php
      $strl = "12,334.00A";
      echo preg_replace("/[^0-9,.]/", "", $strl). "<br>";
    ?>
<!-- xoa cac ky tu khong phai chu va so -->
  <h1>xoa ky tu khong phai chu va so</h1>
    <?php
      $strll = 'abcde$ddfd @abcd )der]';
      echo "chuoi ban dau: ".$strll.'<br>';
      $newstr = preg_replace("/[^A-Za-z0-9 ]/","",$strll);
      echo "chuoi moi: ".$newstr.'<br>';
    ?>