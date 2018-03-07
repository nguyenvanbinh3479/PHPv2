<?php
    class hinh{

        var $canh;
        var $rong;
        
        public function __call($method, $parameter)
        {
          if($method =='dientich')
          {
              switch(count($parameter))
              {
                case 1:
                  return $parameter[0] * $parameter[0];
                case 2:
                  return $parameter[0] * $parameter[1];
                break;
              }
          }      
        }
    }
    $hinhvuong = new hinh();
    echo $hinhvuong->dientich(10, 10);
?>