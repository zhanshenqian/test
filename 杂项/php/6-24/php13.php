<?php 

/*

数组与字符串的互转

	explode(分隔符,被分割的字符串);  将字符串转换成数组
		将字符串以分隔符为依据进行分割,并把分割结果存入数组中返回

		1.分隔符必须是字符串中存在的字符


	implode(连接符,被连接的数组);  将数组转换为字符串
		将数组的每一个值用连接符拼接成一个字符串

		1.连接符可以是任意的合法字符串

*/

$str = '1,2,3,4,5';
print_r(explode(",", $str));


$arr = [7,8,9,1,2,3];
echo implode(',', $arr);
echo implode('|', $arr);
echo implode('^_^', $arr);



$name = '小明';
$sex = '男';
$arr1 = [$name,$sex];
echo implode('-', $arr1);

 ?>