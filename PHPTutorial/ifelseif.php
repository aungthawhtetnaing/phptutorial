<?php 
$t=date('H');
if($t<"20"){
    echo "Have a good Day<br>";
}else{
    echo "Have a good night<br>";
}


$time=date('H');
if($time<"10"){
    echo "Have a good evening<br>";
}elseif($time<"20"){
    echo "Have a good Day<br>";
}else{
    echo "Have a good night<br>";
}
?>