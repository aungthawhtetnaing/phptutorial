<?php
$x=1234;
var_dump(is_int($x));
echo "<br>";

$r=123.99;
var_dump(is_int($r));
echo "<br>";

$o=123.44;
var_dump(is_float($o));
echo "<br>";

$b=1.1e234;
var_dump($b);
echo "<br>";

$v=acos(9);
var_dump($v);
echo "<br>";

$b=1234;
var_dump(is_numeric($b));
echo "<br>";

$f="1234";
var_dump($f);
echo "<br>";

$g="1234"+100;
var_dump(is_numeric($g));
echo "<br>";

$h="hello world";
var_dump(is_numeric($h));
echo "<br>";


$i=1234.11;
$in_cast=(int)$i;
echo $in_cast;
echo "<br>";

$p="1234.09";
$st_cast=(int)$p;
echo $st_cast;
echo "<br>";

?>