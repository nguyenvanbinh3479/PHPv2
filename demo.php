<?php

    require('DB_business.php');
    //tạo mới đối tượng
    $DB = new DB_driver();
    //lớp khách hàng
    class Customer extends DB_business{
        function __construct(){
            //khai báo tên bảng
            $this -> _table_name = 'customer';
            //khai báo tên filed id
            $this -> _key = 'id';
            //gọi hàm khởi tạo cha
            parent :: __construct();
        }
    }
    //khởi tạo lớp khách hàng
    $customer = new Customer();
    //thêm khách hàng
    $customer -> add_new(array(
        'name' => 'nguyễn văn bình',
        'phone' => '01633985817'
    ));
    //xóa khách hàng
    $customer -> delete_by_id(1);

    //update khách hàng
    $customer -> update_by_id(array(
        'name' => 'nguyenvanbinh'
    ), 2);
    //lấy chi tiết khách hàng
    var_dump($customer -> select_by_id('*', 2));

?>