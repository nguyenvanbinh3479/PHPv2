<!-- viet class hien thi chuoi -->
	<h1>class hien thi chuoi</h1>
		<?php
			class MyClass{
				public function __construct()
				{
					echo 'Class da duoc khoi tao'. '<br>';
				}
			}
			$useclass = new MyClass;
		?>
<!-- tao class chua thuoc tinh va phuong thuc -->
  <h1>tao class chua thuoc tinh va phuong thuc</h1>
	  <?php
			class user_messager{
				public $message = 'Xin chao toi ten la ';
				public function introduce($name)
				{
					return $this -> message.$name;
				}
			}
			$mymessage = New user_messager();
			echo $mymessage -> introduce('binh nguyen').'<br>';
		?>
<!-- tao class tinh giai thua 1 so -->
  <h1>tao class tinh giai thua 1 so</h1>
		<?php
			class tinh_giai_thua{
				protected $_n;
				public function __construct($n)
				{
					if (!is_int($n))
					{
						throw new InvalidArgumentException('khong phai tham so!');
					}
					$this -> _n = $n;
				}
				public function result()
				{
					$giai_thua = 1;
					for ($i = 1;$i <= $this -> _n; $i++)
					{
						$giai_thua *= $i;
					}
					return $giai_thua;
				}
			}
			$ket_qua = new tinh_giai_thua(5);
			echo $ket_qua -> result();
		?>
<!-- tao class sap xep mang -->
  <h1>class sap xem mang</h1>
		<?php
			class sap_xep_mang{
				protected $_asort;
				public function __construct(array $asort)
				{
					$this -> _asort = $asort;
				}
				public function ham_sap_xem()
				{
					$sorter = $this -> _asort;
					sort($sorter);
					return $sorter;
				}
			}
			$sortarray = new sap_xep_mang(array(11, -2, 4, 35, 0, 8, -9));
			print_r($sortarray -> ham_sap_xem()). '<br>';
		?>
<!-- class cong tru nhan chia hai gia tri -->
  <h1>class cong tru nhan chia hai gia tri</h1>
	  <?php
			class MyCalculator
			{
				private $_fval, $_sval;
				public function __construct($fval, $sval)
				{
					$this -> _fval = $fval;
					$this -> _sval = $sval;
				}
				public function add()
				{
					return $this -> _fval + $this -> _sval;
				}
				public function subtract()
				{
					return $this -> _fval - $this -> _sval;
				}
				public function multiply()
				{
					return $this -> _fval * $this -> _sval;
				}
				public function divide()
				{
					return $this -> _fval / $this -> _sval;
				}
			}
			$mycal = new MyCalculator(12,6);
			echo $mycal -> add().'<br>';
			echo $mycal -> subtract().'<br>';
			echo $mycal -> multiply().'<br>';
			echo $mycal -> divide().'<br>';
		?>