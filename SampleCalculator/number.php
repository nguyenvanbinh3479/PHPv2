<?php
    class Number{
        var $first;
        var $second;

        function getFirst(){
            return $this->first;
        }
        function getSecond(){
            return $this->second;
        }
        function setFirst($value){
            $this->first = $value;
        }
        function setSecond($value){
            $this->second = $value;
        }

        function tong($first, $second)
        {
            return $first + $second;
        }
        function hieu($first, $second)
        {
            return $first - $second;
        }
    }
    
?>