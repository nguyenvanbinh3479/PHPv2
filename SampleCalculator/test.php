<?php include 'number.php'?>
<?php
    $number = new Number();
    $result = 0;
    $a = "";
    $b = "";
    
    if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c']))
    {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    if (is_numeric($a) && is_numeric($b))
    {
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
    }
?>