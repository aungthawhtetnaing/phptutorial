<?php 
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".<br>";
echo count($cars);
echo "<br>";
echo "<br>";

$brands=array("Honda","Toyota","Chelvot");
$brandlength=count($brands);

for($x=0;$x<$brandlength;$x++){
    echo $brands[$x];
    echo "<br>";
}

$boy=array("mgmg"=>"12","aung"=>"11","kyaw"=>"14");

foreach($boy as $x => $value){
    echo "Key is $x and value is $value";
    echo "<br>";
}


$motor=array(
    array("bmw",12,1),
    array("Toyota",22,34),
    array("htoo",23,3),
    array("niro",3,12),

);

for($row=0 ; $row<4 ; $row++)
{
    echo "<p><b>row is".$row."</b></p>";
    echo "<ul>";
    for ($coloum=0; $coloum < 3; $coloum++) { 
        echo "<li>".$motor[$row][$coloum]."</li>";
    }
    echo "</ul>";

}

?>

<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>

<?php
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}
?>

<?php
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>

<?php
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}
?>


<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>