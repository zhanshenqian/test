<?php 

/*

删除字符串两端的空格

*/

// $str = '   hello world   ';

// echo '(' . ltrim( $str ) . ')';   //删除字符串左边的空格
// echo '(' . rtrim( $str ) . ')';   //删除字符串右边的空格
// echo '(' . trim( $str ) . ')';   //删除字符串左右两边的空格


// $str1 = '   hello world   ';
// $s = ltrim($str1,' ');
// echo '(' . ltrim($s,'h') . ')';


// $str2 = '   hello world   ';
// $s = rtrim($str2,' ');
// echo '(' . rtrim($s,'d') . ')';


$str3 = '   ihello world    ';
$s = trim($str3, ' ');
echo '(' . trim($s,'i') . ')';


 ?>