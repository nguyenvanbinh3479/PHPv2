<?php

    $fullname = "Nguyen Van Binh";
    $pos = -1;
    for($i = strlen($fullname) - 1; $i >= 0; $i--){
        if($fullname[i] == ' '){
            $pos = $i;
            break;
        }
    }
    if($pos > -1){
        $name = substr($fullname, $pos + 1, strlen($fullname) - $pos - 1);
        echo $name;
    }

?>