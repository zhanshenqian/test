<?php 

$a = "10";
$b = 123;

echo $a + $b;  //在运算过程中,会自动发生类型转换
echo gettype($a); //计算过程中临时转换类型,本身类型并不会真的改变


$c = "0";
$d = false;
echo $c == $d;  //1
echo $c === $d; //false

if($c == $d){
	echo "真";
}else{
	echo "假";
}
 ?>

