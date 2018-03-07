<?php
    class person
    {
        var $name;
        var $age;
        var $gender;
        var $phone;
        
        public function __construct($name,$age,$gender,$phone)
        {
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
            $this->phone = $phone; 
        }
        function getName()
        {
            return $this->name;
        }
        function setName($value)
        {
            $this->name = $value;
        }

        function getAge()
        {
            return $this->age;
        }
        function setAge($value)
        {
            $this->age = $value;
        }

        function getGender()
        {
            return $this->gender;
        }
        function setGender($value)
        {
            $this->gender = $value;
        }

        function getphone()
        {
            return $this->phone;
        }

    }
    

?>