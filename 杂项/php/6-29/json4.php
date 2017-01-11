<?php 

$str = '[1,2,3,4]';
$arr = json_decode($str); 

print_r($str); //打印出来是字符串
print_r($arr); //打印出来是数组


$str1 = '{"a":123,"b":"abc"}';
$arr1 = json_decode($str1); 

print_r($str1);//打印的是字符串
print_r($arr1);//打印的是数组

/*

json_decode($str,true);
	把字符串形式的值转换成对象和数组

	第一个参数  要转换的字符串值

	第二个参数 一个布尔值,用来表示是将字符串转换成对象还是数组,默认是false,表示转换成对象

*/
 ?>