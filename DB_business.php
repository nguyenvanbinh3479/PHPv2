<?php

    //thư viện xủ lý database
    class DB_driver{
        //biến lưu trữ kết nối
        private $__conn;
        //hàm kết nối
        function connect(){
            //nếu chưa kết nối thì kết nối
            if(!$this -> $__conn){
                //kết nối
                $this -> __conn = mysqli_connect('localhost', 'root', 'vertrigo', 'demo') or die ('lỗi kết nối');
                //xử lý utf-8 tránh lỗi font
                mysqli_query($this -> __conn, "SET character_set_results = 'utf-8', character_set_database = 'utf-8', character_set_server - 'utf-8'");
            }
        }
        //hàm ngắt kết nối
        function dis_connect(){
            if($this -> __conn){
                mysqli_close($this -> __conn);
            }
        }
        //hàm insert
        function insert($table, $data){
            //kết nối
            $this -> connect();
            //lưu dữ danh sách file
            $filed_list = '';
            //lưu trữ danh sách giá trị tương ứng với filed
            $value_list = '';
            //lặp qua data
            foreach($data as $key => $value){
                $flied_list .= "$key";
                $value_list .= ",'".mysql_escape_string($value)."'";
            }
            //Vì sau vòng lặp các biến $field_list và $value_list sẽ thừa một dấu , nên ta sẽ dùng hàm trim để xóa đi
            $sql = 'INSERT INTO '.$table. '('.trim($filed_list, ',').') VALUES ('.trim($value_list, ',').')';
            return mysqli_query($this -> __conn, $sql);
        }
        //hàm update
        function update($table, $data, $where){
            //kết nối
            $this -> connect();
            $sqp = '';
            //lặp qua data
            foreach ($data as $key => $value){
                $sql .= "$key = '".mysql_escape_string($value)."',";
            }
            //Vì sau vòng lặp biến $sql sẽ thừa một dấu , nên ta sẽ dùng hàm trim để xóa đi
            $sql = 'UPDATE '.$table. ' SET '.trim($sql, ',').' WHERE '.$where;
            return mysqli_query($this -> __conn, $sql);
        }
        //hàm delete
        function remove($table, $where){
            //kết nối
            $this -> connect();
            //delete
            $sql = "DELETE FROM $table WHERE $where";
            return mysqli_query($this -> __conn, $sql);
        }
        //hàm lấy danh sách
        function get_link($sql){
            //kết nối
            $this -> connect();
            $result = mysqli_query($this -> __conn, $sql);
            if(!$result){
                die ('câu truy vấn bị sai');
            }
            $return = array();
            //lặp qua kết quả để đưa vào mảng
            while ($row = mysqli_fetch_assoc($result)){
                $return[] = $row;
            }
            //xóa kết quả khỏi bộ nhớ
            mysqli_free_result($result);
            return $return;

        }
        //hàm lấy chi tiết tin
        function get_row($sql){
            //kết nối
            $this -> connect();
            $result = mysqli_query($this -> __conn, $sql);
            if(!$result){
                die ('câu truy vấn bị sai');
            }
            $row = mysqli_result_fetch_asoc($result);
            //xóa kết quả kkhỏi bộ nhớ
            mysqli_free_result($result);
            if($row){
                return $row;
            }
            return false;
        }
    }
?>