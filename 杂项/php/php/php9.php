<?php 

/*

数字类型:
	整型: 整数类型数字,不包括小数
	浮点型: 带有小数的数字

*/
$a = 10;

$b = 10.5;

$c = 0.1234;

echo gettype($a);  //integer 整型

echo gettype($b);  //double  浮点型

echo gettype($c);  //double  浮点型


//数据类型:布尔值

$d = true;
$e = false;

echo gettype($d);  //boolean 布尔值
echo gettype($e);  //boolean 布尔值


 ?>