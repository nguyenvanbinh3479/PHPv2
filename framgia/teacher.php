
<?php
    class teacher extends person
    {
        var $khoa;

        public function __construct($name,$age,$gender,$phone,$khoa)
        {
            parent:: __construct($name,$age,$gender,$phone);
            $this->khoa = $khoa; 
        }
        function getkhoa()
        {
            return $this->khoa;
        }
        function setkhoa($value)
        {
            $this->khoa = $value;
        }
        public function getName()
        {
            return "<br>ten giao vien la: ".$this->name;
        } 
        function getAge()
        {
            return '<br>tuoi giao vien: '.$this->age;
        }
        function getGender()
        {
            return '<br>gioi tinh giao vien: '.$this->gender;
        }
        function getphone()
        {
            return '<br>sdt giao vien: '.$this->phone;
        }
    }
?>