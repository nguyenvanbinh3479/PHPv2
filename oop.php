<?php

class DongVat
{
    // Các thuộc tính
    var $hello = 'xin chào các bạn <br>';
    var $mat = '';
    var $mui = '';
    var $tay;
    var $chan;
  
    // Các phương thức
    function an($thuc_an)
    {
        echo 'hôm nay ăn món' . $thuc_an;
    }
  
    function sua()
    {
        echo $this -> hello;
    }
  
    function chay()
    {
        echo 't đang chạy <br>';
    }
}
//khởi tạo đối tượng
$conheo = new DongVat();
$conga = new DongVat();
//truy suất đến các thuộc tính đối tượng
//gán giá trị cho các thuộc tính
$conheo -> mat = 'mắt 2 mí <br>';
$conheo -> mui = 'mũi tây phương <br>';
//xuất ra màn hình
echo $conheo -> mat;
echo $conheo -> mui;
//gọi đến phương thức
$conheo -> an(' cám <br>');
//hàm trong đối tượng gọi đến thuộc tính
$conheo -> sua();

//tính kế thừa
class conbo extends DongVat{
    var $sung = '';
    function gioi_thieu(){
        //gọi trong lớp
        $this -> mat = 'đây là mặt';
        parent::chay();
    }
}
$conBo = new conbo();
//gọi ngoài lớp
echo $conBo -> gioi_thieu();
echo $conBo -> mat;


?>