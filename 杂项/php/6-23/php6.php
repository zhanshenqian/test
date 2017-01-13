<?php 

/*
 foreach循环
	索引数组
	关联数组

*/

$arr = [1,2,3,4];
$arr2 = ['a' => 123,'b' => 'abc','c' =>true];

foreach ($arr as $key => $value) {

	//as:以$key为数组的属性名,以$value作为数组的属性值
	echo '属性名为:' . $key . '属性值为:' . $value . '<br>';
}
 ?>
