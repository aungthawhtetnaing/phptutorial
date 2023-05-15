<?php 

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
echo "<br>";

define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[0];
  echo "<br>";
  
define("GREETING", "Welcome to W3Schools.com!");
function my(){
     echo GREETING;
}
my();
echo "<br>";

define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;
?>