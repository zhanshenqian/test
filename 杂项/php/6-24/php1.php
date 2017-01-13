
<?php 
/*

数组:
	索引数组:
		以有序的数字作为属性名称的数组

	关联数组:
		以非数字的字符串作为属性名称的数组

*/

$arr = [1,2,3];  //索引数组
$arr1 = ['a' => 123,'b' => 'abc'];  //关联数组

// print($arr);  //输出的作用

// print_r($arr1);  //打印


$arr2 = [];
$arr2[] = 123;
$arr2[] = 456;

print_r ($arr2) ;

$arr3 = [];
$arr3['a'] = 123;
$arr3['b'] = 456;
print_r ($arr3);


/*
range(): 创建指定范围的数组  
*/

$arr4 = range(1, 100); //1-100
print_r($arr4);

$arr6 = range(100, 1); //100-1
print_r($arr6);

$arr5 = range('a', 'h');//a-h  
print_r($arr5);

$arr6 = range('123', 'abc'); //100-1
print_r($arr6);

$arr7 = range('abc', 'hfd'); //a-h   当多个字母组成的字符串时,只比较第一个字符的范围
print_r($arr7);

$arr8 = range('123', '284vbfgdas'); //123-284  //只会比较前面的数字
print_r($arr8);

 ?>