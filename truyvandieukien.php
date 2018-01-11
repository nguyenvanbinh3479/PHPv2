<?php

    //lấy thông tin lọc
    $filter = array(
        'email' => isset($_GET['email']) ? mysql_escape_string($_GET['email']) : false,
        'phone' => isset($_GET['phone']) ? mysql_escape_string($_GET['phone']) : false,
        'address' => isset($_GET['address']) ? mysql_escape_string($_GET['address']) : false,
        'fullname' => isset($_GET['fullname']) ? mysql_escape_string($_GET['fullname']) : false,
    );
    //biến lưu trữ lọc
    $where = array();
    //nếu có chọn lọc thì thêm diều kiện vào mảng
    if($filter['email']){
        $where[] = "email = '{$filter['email']}'";
    }
    if($filter['phone']){
        $where[] = "phone = '{$filter['phone']}'";
    }
    if($filter['address']){
        $where[] = "address = '{$filter['address']}'";
    }
    if($filter['fullname']){
        $where[] = "fullname = '{$filter['fullname']}'";
    }
    //câu truy vấn cuối
    $sql = 'SELECT * FROM customer';
    if($where){
        $sql .= 'WHERE  '.implode('AND', $where);
    }
    

?>