<?php 
//数据类型: 数组

$arr1 = [1,2,3,4];  //数组的两种写法
$arr2 = array(1,2,3,4);

// echo $arr1;
// echo $arr2;

// echo $arr1[0];  //1
// echo $arr2[1];  //2

$a = null;
$b;

echo gettype($a);  //NULL
echo gettype($b);  //NULL

$c = 123;
unset($c);  //清除一个变量的值,重置成默认的null值
echo gettype($c);  //NULL

 ?>