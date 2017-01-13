<?php 

/*

preg_grep(reg,array) : 从数组中筛选出符合要求的值

	reg:正则表达式 筛选条件

	array: 用来做筛选的数组

*/

$arr = [1233,'gfvh','fdg54f46d','153','4g5f6g'];

$reg = '/^\d+$/';

$results = preg_grep($reg, $arr);

print_r($results);	




 ?>