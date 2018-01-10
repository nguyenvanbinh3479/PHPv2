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

//private
class xe{
    private $loaixe;
    var $tenxe = '';
    function getloaixe(){
        return $this -> loaixe;
    }
    function setloaixe($loaixe){
        $this -> loaixe = $loaixe;
    }
    private function xoaxe(){
        echo 'xe đã xóa';
    }
    //protected
    protected function soxe(){
        
    }
}
//khởi tạo lớp đối tượng
$Xe = new xe();
//gán giá tị thuộc tính loại xe
$Xe -> setloaixe("<br> suzuki");
//lấy giá trị thuộc tính loại xe
echo $Xe -> getloaixe();

class honda extends xe{
    function hien_thi(){
        $this -> tenxe = 'balovito';
        $this -> setloaixe("<br> honda");
        echo $this -> getloaixe(); 
        echo $this -> soxe = '<br> 2740';
    }
}
$xehonda = new honda();
$xehonda -> hien_thi();
$xehonda -> setloaixe("<br> zdbuu <br>");
echo $xehonda -> getloaixe();
echo $xehonda -> tenxe;

//kế thừa lồng
// Lớp A
class A
{
    protected $protected_A = 'Protected <br>';
    private $private_A = 'Private';
    public $public_A = '<br>Public <br>';
  
    private function showPrivate()
    {
        echo $this->private_A;
    }
  
    protected function showProtected()
    {
        echo $this->protected_A;
    }
  
    public function showPublic()
    {
        echo $this->public_A;
    }
}
  
// Lớp B Kế Thừa Lớp A
class B extends A
{
    public function ClassB()
    {
        echo $this->protected_A;
    }
}
  
// Lớp C Kế Thừa Lớp B
class C extends B
{
    public function showInfo()
    {
        // Lệnh này đúng vì nó truy xuất vào thuộc tính protected
        $this->protected_A = 'Nguyễn Văn A';
  
        // Lệnh này đúng vì nó truy xuất vào thuộc tính public
        $this->public_A = 'Nguyễn Văn B';
  
        // Lệnh này sai vì nó truy xuất vào thuộc tính private
        //$this->private_A = 'Lệnh sai';
    }
}
  
// ------------------//
// Chương trình chính//
// ------------------//
  
// Khởi tạo lớp C
// Lớp C được kế thừa từ lớp B
// mà lớp B kế thừa từ lớp A nên
// suy ra nó kế thừa từ 2 lớp A, B
$c = new C();
  
// Lệnh này đúng vì gọi đến hàm public của lớp cha A
$c->showPublic();
  
// Lệnh này sai vì nó gọi hàm protected của lớp cha A
//$c->showProtected();
  
// Lệnh này sai vì nó gọi hàm private của lớp cha A
//$c->showPrivate();
  
// Lệnh này đúng vì nó truy xuất vào hàm public của lớp cha B
$c->ClassB();

//tính đa hình
class hinhhoc{
    function ve(){

    }
    function tinhdientich(){

    }
}
class hinhvuong extends hinhhoc{
    public $canh = 0;
    function ve(){
        echo "vẽ hình vuông";
    }
    function tinhdientich(){
        return $this -> canh * $this -> canh;
    }
}
class hinhchunhat extends hinhhoc{
    public $dai = 0;
    public $rong = 0;
    function ve(){
        echo 'vẽ hình chữ nhật';
    }
    function tinhdientich(){
        return $this -> dai * $this -> rong;
    }
}
$hinhChuNhat = new hinhchunhat();
$hinhChuNhat -> ve();
echo '<br>';
$hinhChuNhat -> dai = 25;
$hinhChuNhat -> rong = 20;
echo $hinhChuNhat -> tinhdientich();
echo '<br>';
$hinhVuong = new hinhvuong();
$hinhVuong -> ve();
echo '<br>';
$hinhVuong -> canh = 20;
echo $hinhVuong -> tinhdientich();

//tính đóng gói
//hàm khởi tạo
class sv{
    function __construct(){
        echo '<br>lớp sinh viên vừa được khởi tạo';
    }
}
//khởi tạo lớp sv
$sinhv = new sv();
//hàm hủy
class d{
    function __construct(){
        echo "<br>lớp d đc khởi tạo<br>";
    }
    function show(){
        echo 'lớp d đc sử dụng<br>';
    }
    function __destruct(){
        echo "lớp d bị hủy<br>";
    }
}
//chương trình
$d = new d();
$d -> show();

//lớp trừu tượng abstract
//khai báo
abstract class BaseClass{
    abstract protected function hello();
    abstract public function hi();
    public $nme;
}

abstract class person{
    protected $ten;
    protected $cmnd;
    protected $namsinh;
    abstract public function showInfo();
}
class SihVien extends Person{
    public function showInfo(){

    }
}
//hàm và lớp final là hàm không được kế thừa
final class Person1{
    protected $ten;
    protected $cmnd;
    protected $namsinh;
    public function showInfo(){
        echo "hello<br>";
    }
}
$person = new Person1;
$person -> showInfo();

//Interface
interface g
{
    const Constg = 'Freetuts.net';
    public function run();
}  
//kế thừa interface
interface h extends g{
    public function jum();
}
// Lớp này đúng
class heo implements h
{
    public function run(){

    }
    public function jum(){

    }
}
//thuộc tính phương thức tĩnh statis
class Animal{
    protected static $_name = 'chưa có tên<br>';
    public static function setname($name){
        // $this -> _name = $name;
        Animal::$_name = $name;
    }
    public static function getname(){
        // return $this -> _name;
        //biến bị ảnh hưởng
        return Animal::$_name;
    }
    //gọi hàm tĩnh
    public static function all($name){
        Animal :: setname($name);
        echo Animal :: getname();
    }
}

// $con_vit = new Animal();
// $con_vit -> setname('con vịt<br>');
// echo $con_vit -> getname();
Animal :: setname('con vịt<br>');
echo Animal :: getname();
// $con_heo = new Animal();
// echo $con_heo -> getname();
Animal :: setname('con heo<br>');
echo Animal :: getname();
//gọi thuộc tính tĩnh
Animal :: all("con chó<br>");

?>