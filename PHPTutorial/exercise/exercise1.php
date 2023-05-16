<?php
function myfun(int $x) {
    $result = $a>10 && $a <200 ? true:false;
    return $result;
  }
  
  var_dump(myfun(100));
  var_dump(myfun(30));
  var_dump(myfun(200));


function mydata(int $n,int $m ,int $k){
    echo max($n,$m,$k);
}
mydata(1000, 333, 1222);
?>