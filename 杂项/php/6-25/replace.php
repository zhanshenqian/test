<?php 
/*

preg_replace() : 将匹配的结果替换成指定的其他值

*/

$str = 'gdsfd4h56dsf4hfdh45dfsh5dfsh5';

$reg = '/\d+/';

// echo preg_replace($reg, '你好', $str);


// echo preg_replace(['/\d+/','/[a-z]+/'], ['你好','世界'], $str);
//可以使用数组作为参数实现同时进行多个匹配,数组中的匹配关系是一一对应的


echo preg_replace(['/\d+/','/[a-z]+/'], ['你好'], $str);  
//如果没有与匹配结果对应的替换值,匹配的结果默认会用''来替换

 ?>