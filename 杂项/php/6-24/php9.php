<?php 

//substr : 提取字符串中指定范围的一段子字符串

$str = 'Hello Lanou ShangHai';

// echo substr($str,6,5); //从字符串中提取字符,从第6个位置开始,提取5个字符

// echo substr($str, 6);  //提取从字符串的第6个字符位置开始,后面的所有字符

// echo substr($str, -8);  //提取从字符串后往前数,第8个字符开始,后面的所有字符

// echo substr($str, 6,-3);  //提取从字符串的第6位开始,到从后往前数,第三个字符的位置之间的所有字符(结果不包含第三个字符)
 


// echo strstr($str, 'an'); //返回以'an'所在位置开始的后面的所有字符

echo strstr($str, 'an',true); //返回以'an'所在位置结束的前面的所有字符

/*

strstr() : 查找字符串中的指定字符串在字符串中的位置,然后根据第三个参数来返回从找到的字符串位置开始前面的所有字符或者后面的所有字符

该方法在查找时,区分大小写,如果想忽略大小写进行查找,需要使用stristr();

*/
 
 ?>