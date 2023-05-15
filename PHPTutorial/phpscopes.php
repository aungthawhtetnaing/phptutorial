<?php
$x=11;
function mycode(){
    echo "Function in my x value is $x <br>";
}
mycode();
echo "Function outside my x value is $x <br>";

$a=11;
$b=2;
function mytest(){
    global $a,$b;
    $b = $a+$b;
}
mytest();
echo $b."<br>";


$f=20;
$g=10;
function mytest2(){
    $GLOBALS['f']=$GLOBALS['g']+$GLOBALS['f'];
}
mytest2();
echo $f."<br>";


function mytest3(){
    static $v=0;
    echo $v;
    $v++;
}
mytest3();
mytest3();
mytest3();


?>