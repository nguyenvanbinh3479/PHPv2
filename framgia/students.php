
<?php
    class students extends person
    {
        var $khoa;

        public function __construct($name,$age,$gender,$phone,$diem)
        {
            parent:: __construct($name,$age,$gender,$phone);
            $this->diem = $diem; 
        }
        function getdiem()
        {
            return $this->diem;
        }
        function setdiem($value)
        {
            $this->diem = $value;
        }
        public function getName()
        {
            return "<br>ten hoc sinh la: ".$this->name;
        } 
        function getAge()
        {
            return '<br>tuoi hoc sinh: '.$this->age;
        }
        function getGender()
        {
            return '<br>gioi tinh hoc sinh: '.$this->gender;
        }
        function getphone()
        {
            return '<br>sdt hoc sinh: '.$this->phone;
        }
    }
?>