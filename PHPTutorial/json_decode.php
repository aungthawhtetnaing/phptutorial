<?php
$jsonencode='{"peter":35,"Ben":12,:"robin":90}';

var_dump(json_decode($jsonencode));
// echo "<br>";
// $obj=json_decode($json);

// $arr=json_decode($json,true);
// var_dump($arr);
// echo $arr['peter'];
?>