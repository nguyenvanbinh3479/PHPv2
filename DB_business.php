<?php

    require "DB_driver.php";
    class DB_business extends DB_driver{
        //tên table
        protected $_table_name = '';
        //tên khóa chính
        protected $_key = '';
        //hàm khởi tạo
        function __construct(){
            parent :: connect();
        }
        //hàm ngắt kết nối
        function __destruct(){
            parent :: dis_connect();
        }
        //hàm xóa theo id
        function delete_by_id($table, $id){
            return $this -> remove ($this -> _table_name, $this -> _key.'='.(int)$id);
        }
        //hàm thêm mới
        function add_new($data){
            return parent :: insert($this -> _table_name, $data);
        }
        //hàm nhập theo id
        function update_by_id($id){
            return $this -> update($this -> _table_name, $data, $this -> _key.'='.(int)$id);
        }
        //hàm select theo id
        function select_by_id($select, $id){
            $sql = "select $select from ".$this -> _table_name."where".$this -> _key." = ".(int)$id;
            return $this -> get_row($sql);
        }
    }

?>