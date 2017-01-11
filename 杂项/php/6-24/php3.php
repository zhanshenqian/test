<?php 

/*

遍历每一个数组
*/

$arr = [1,2,3,4,5,6];
$arr2 = ['a' => 123,'b' => 'abc'];

$len = count($arr);
for($i = 0;$i < $len;$i++){
	echo $arr[$i];
}

// $len = count($arr2);
// for($i = 0;$i < $len;$i++){  //关联数组不能使用for循环
// 	echo $arr2[$i];
// }

foreach ($arr2 as $key => $value) {  //关联数组只能使用foreach循环来遍历
	echo $value;
}


foreach ($arr as $key => $value) {  //索引数组即能使用for循环,也可以使用foreach循环
	echo $value;
}

 ?>