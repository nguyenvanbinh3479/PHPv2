<?php

    //lấy chữ sau cùng
    $fullname = "Nguyen Van Binh";
    $pos = -1;
    for($i = strlen($fullname) - 1; $i >= 0; $i--){
        if($fullname[$i] == ' '){
            $pos = $i;
            break;
        }
    }
    if($pos > -1){
        $name = substr($fullname, $pos + 1, strlen($fullname) - $pos - 1);
        echo $name . "<br>";
    }
    //xắp xếp 1 mảng số và đếm xem có bao nhiêu số khác nhau
    $arr = array(8,5,4,9,6,7,2,1,3);
    foreach($arr as $item){
        echo "$item";
    }
    for($i = 0; $i < count($arr) - 1; $i++){
        for($j = $i + 1; $j < count($arr); $j++){
            if($arr[$i] > $arr[$j]){
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j]  =$temp; 
            }
        }
    }
    echo "<Br>";
    foreach($arr as $item){
        echo "$item";
    }
    
?>