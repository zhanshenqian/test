<?php 

/*

preg_split(reg,string,times)
	以分割为依据将字符串分割成数组

	reg

*/

$str = 'grdsf4hdfs4645fhd54dsh5646hfdsh2311';

$reg = '/\d+/';

$arr = preg_split($reg, $str);

print_r($arr)

 ?>