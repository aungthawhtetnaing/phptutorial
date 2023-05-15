<?php 
// String?
$q="hello";
$w="World";
echo $q." ".$w."<br>";

// intenger
$e=1234;
var_dump($e);
echo "<br>";

// Float
$t=12.444;
var_dump($t);
echo "<br>";

// array
$y=array("Car","Bicycle","Plane");
var_dump($y);
echo "<br>";

// object
class Car{
    public $color;
    public $model;
    public function __construct($color,$model){
        $this->color=$color;
        $this->model=$model;
    }
    public function message(){
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$car1=new Car("puple","BMW");
echo $car1->message();
echo "<br>";
$car2=new Car("puple","Farrie");
echo $car2->message();
echo "<br>";

$o=1234;
$o=null;
var_dump($o);
?>