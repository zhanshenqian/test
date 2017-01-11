<?php 

$str = 'Hello, World!';

// echo  str_replace('H', 'h', $str);
// echo  str_replace(['H','W'], ['h','w'], $str);
// echo  str_replace(['H'], ['h','w'], $str);
//如果前面的数组个数比后面少，后面多余的会被忽略

// echo  str_replace(['H','W'], ['h'], $str);
  //后面数组没有值跟前面数组中的值对应，表示把前面数中的值用''替换。

// echo str_replace('l','L',$str,$a);
// echo $a;  //3

/*
  str_replace(searh,replace,string,count) 
    将字符串中的指定字符串替换成另一个字符串
    search : 想要被替换的字符串
    replace : 将 search 替换成哪个字符串
    string : 在哪个字符串中查找替换
    count : 一个用来接收统计一共替换了多少个字符的变量
    该方法替换时区分大小写

  str_ireplace(searh,replace,string,count)
    作用和用法与 str_replace() 相同，只是在替换时不区分大小写。

*/

// echo str_replace('H','i',$str);
echo str_replace('h','i',$str);
 ?>


