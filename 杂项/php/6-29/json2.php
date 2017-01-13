<?php

$arr = [1,2,3,4];  //索引数组
$str = json_encode($arr);  //索引数组会转换成字符串形式的数组

var_dump($arr); //打印出来是数组
var_dump($str); //打印出来是字符串

$arr1 = ['a' => 123,'b' => 'abc'];
$str1 = json_encode($arr1);  //关联数组会转换成字符串形式的json

var_dump($arr1); //打印出来是数组
var_dump($str1); //打印出来是字符串

?>