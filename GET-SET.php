<?php

    class ClassName{
        private $__username;
        private $__password;
        //set
        function setusername($value){
            $this -> __username = $value;
        }
        function setpassword($value){
            $this -> __password = md5('prefix'.$value);
        }
        //get
        function getusername(){
            return $this -> __username .'<br>';
        }
        function getpassword(){
            return 'your account is: '.$this -> __password .'<br>';
        }
    }
    $class = new ClassName();
    $class -> setusername('binhnguyen');
    $class -> setpassword('123456'); 
    echo $class -> getusername();
    echo $class -> getpassword();

    //__set
    class classname1{
        public $username1 = '';
        function __set ($key, $value){
            if($key = 'somekey'){
                $this -> username1 = $value .'<br>';
            }
        }
    }
    $class = new classname1();
    $class -> somekey = 'binhnguyen';
    echo $class ->username1;

    //gọi phương thức không tồn tại//__callStatic khi gọi phương thức tĩnh
    class hs{
        public function __call($method, $params){
            echo 'tên phương thức: '.$method.'<br>';
            echo 'tham số truyền vào: '.$method.'<br>';
            echo '<pre>';
            print_r($params);
        } 
    }
    $student = new hs();
    $student -> get_name('nguyenvanbinh');

?>