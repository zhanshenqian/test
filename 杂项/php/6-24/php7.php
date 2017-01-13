<?php 

/*
字符串查找

strpos(string,find,start);
	查找字符串中是否有指定的字符串,如果找到了,就返回这个字符串第一次出现的位置,如果没有找到就返回false
	string 大的字符串
	find 指定的要查找的字符串
	start 指定开始查找的位置

strpos() 方法查找时会区分大小写

stripos(string,find,start)
	用法和作用与strpos()方法一样,只是该方法查找时不区分大小写
*/

$str = 'www.LANOU3G.com';

// echo strpos($str, 'OU');  //能查找到OU的位置
// echo strpos($str, 'ou'); //查找不到ou的位置


echo stripos($str, 'ou');  //能查找到ou的位置
 ?>