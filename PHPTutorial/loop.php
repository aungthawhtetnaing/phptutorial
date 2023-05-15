<?php
$x=1;
while($x<=5){
    echo "it is $x <br>";
    $x++;
}
echo "<br>";

$y=0;
while($y<=100){
    echo "it is $y <br>";
    $y+=10;
}


?>

<p>Do while</p>

<?php 
$p=1;
do{
    echo "it is $p<br>";
    $p++;
}while($p<=5);
echo "<br>";
?>

<?php 
$p=6;
do{
    echo "it is $p<br>";
    $p++;
}while($p<=5);
?>

<p>for loop</p>

<?php 
for($i=0;$i<=10;$i++){
    echo "it is $i<br>";
}

for($n=0;$n<=100;$n+=10){
    echo "it is $n<br>";
}
?>

<p>forrach</p>

<?php
$name=array("aung","naing","moe");
foreach($name as $color){
    echo $color."<br>";
}


$age=array("aung"=>'12',"naing"=>"23","moe"=>"24");
foreach($age as $mk => $val){
    echo $mk;
    echo $val;
    echo"<br>";
}
?>