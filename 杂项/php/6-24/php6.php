<?php 

/*

字符串输出
	echo 可以输出多个由逗号分隔的字符串
	print 只能输出一个字符串
	print的性能略低于echo

*/

// echo '123','abc','bfdhs','546';

// print '123';

// print '123','456';  //当print输出多个字符串的时候  报错

/*

字符串方法
	strlen(): 获取字符串的字符长度

	注意:一个英文字母占一个字符长度
		一个中文汉字,根据编码不同,会占2~3个字符,不固定

	字符长度跟文字个数并不是对应的

*/

$str = 'abcd';
$str1 = '蓝鸥';
echo strlen($str);  //4
echo strlen($str1); //6


$str2 = 'www.LANOU3G.com';

echo strtolower($str2);  //strtolower将整个字符串转换成小写

echo strtoupper($str2);  //strtoupper将整个字符串转换成大写
 ?>