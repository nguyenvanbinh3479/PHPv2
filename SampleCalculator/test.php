<?php include 'number.php'?>
<?php
    $number = new Number();
    $result = 0;
    
    if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c']))
    {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        
        $number->setFirst($a);
        $number->setFirst($b);
        switch($c)
        {
        case "+":
            $result = $number->tong($a, $b);
        break;
        case "-":
            $result = $number->hieu($a, $b);
        break;
        }	
    }
?>