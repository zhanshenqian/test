<?php 

//传值
$a = 123;
$b = $a;
// echo $b;

$b = 456;  //传值当变量的值发生改变的时候,另一个变量的值不会随之改变
// echo $b;
// echo $a;

//传址  在变量的 $ 符号前面加一个 & 符号来表示引用
$c = 123;
$d = &$c;
// echo $d;


$d = 789; //传址当变量的值发生改变的时候,另一个变量也随之改变
// echo $d;
// echo $c;


$var = "hello";
$$var = "world";
echo $hello;
$$$var = "hello world"; //php可以以一个变量的值作为另一个变量的变量名
echo $world;


 ?>