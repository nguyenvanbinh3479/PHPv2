<?php
    include 'abstract.php';
        
    class conga extends animal{
        var $long = 'den';
        public function dichuyen(){
            return 'di hai chan';
        }
    }

    class contrau extends animal{
        var $long = 'den';
        public function dichuyen(){
            return 'di bon chan';
        }
    }
    $ga = new conga();
    echo $ga->dichuyen(); 
?>