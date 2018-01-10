<?php

    require('DB_driver.php');
    //tạo mới đối tượng
    $DB = new DB_driver();
    //INSERT
    $DB -> insert('customer', array(
        'name' => 'nguyễn văn cường',
        'phone' => '01633985817'
    ));
    //UPDATE
    $DB -> update('customer', array(
        'name' => 'binhnguyen'
    ), 'id = 1');
    //delete
    $DB -> remove('customer', 'id = 1');
    //GET LIST
    var_dump($DB -> get_list('select * from customer'));
    //GET 1 ROW
    var_dump($DB -> get_row('select * from customer where id = 2'));

?>