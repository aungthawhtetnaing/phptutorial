<?php 
function myfun(){
    echo "Hello World<br>";
}
myfun();

function familyName($name){
    echo "$name is mg mg family<br>";
}
familyName("Kyaw Kyaw");
familyName("U Kyaw");
familyName("Thri Kyaw");
familyName("Pi Kyaw");


function familyName2($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
  }
  
  familyName2("Hege", "1975");
  familyName2("Stale", "1978");
  familyName2("Kai Jim", "1983");
  
function initnum(int $n,int $m){
    return $n+$m;
}
echo initnum(5,"4");
?>

<!-- // since strict is enabled and "5 days" is not an integer, an error will be thrown -->
<?php 
declare(strictTy=1);
function strictTy(int $c,int $v){
    return $c+$v;
}
echo strictTy(4,"5");
echo"<br>";

function setHeight(int $minHeight=50){
    echo "The height is $minHeight<br>";
}
setHeight(20);
setHeight();
setHeight(200);
setHeight(60);

function returnfun(int $n,int $m){
    $z=$n+$m;
    return $z;
}
echo "1+2=".returnfun(1,2)."<br>";
echo "3+4=".returnfun(3,4)."<br>";
echo "1+6=".returnfun(1,6)."<br>";


function floatfun(float $s,float $k):float{
    $u=$s+$k;
    return $u;
}
echo floatfun(1.2,1.4)."<br>";

function intflo(float $j,float $l):int{
    return (int)($j+$l);
}
echo intflo(1.2,1.4)."<br>";

function add_five(&$value){
    $value +=5;
}
$num=2;
add_five($num);
echo $num;
// &note include



?>