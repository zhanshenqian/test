<?php 
/*

二维数组

*/

// $arr = [[1,2,3,4],['a','b','c']];

// print_r($arr);

// foreach ($arr as $key => $value) {
// 	foreach ($value as $k => $v) {
// 		echo $k . ':' . $v . '<br>';
// 	}
// }


$arr2 = array(array(1,2,3,4),array('a' => 123,'b' => 'abc'));
foreach ($arr2 as $key => $value) {
	foreach ($value as $k => $v) {
		echo $k . ':' . $v . '<br>';
	}
}


 ?>