<?php 
/*

数据类型检测:

	is_array() :检测是否为数组
	is_numeric() :检测是否为数字
	is_string() :检测是否为字符串
	is_int() :检测是否为整型数字

*/
$a = 10;
$b = true;
$c = "abc";
$d = 10.45;
$arr = [1,2,3,4];

$results = is_int($arr);

echo is_int($a);
echo is_string($c);
echo is_array($arr);
echo is_numeric($d);


//var_dump()  查看详细数据类型

echo var_dump(123);
echo var_dump("abc");
echo var_dump([1,2,3]);
echo var_dump(true);
echo var_dump(123.456);
 ?>