<?php 

/*

preg_match(reg,string,array)
	匹配成功返回true  匹配失败返回false

	reg : 正则表达式
	string : 在哪个字符串中进行匹配
	array : 可选参数 声明一个变量
		如果指定这个参数,当匹配结果时,会将第一个匹配到的内容存放到一数组中,并将数组赋给这个参数

		数组的第一个值存放的是匹配的结果

		数组的第二个值是第一个子项
		数组的第三个值是第二个子项
		以此类推...

*/

$str = '44564hdh5rte4whjtr34j778rewhy3dfzhdt5h4jryj123dfh6r4';

// $reg = '/((\d))+/';
$reg = '/\d+/';

if(preg_match($reg, $str,$match)){
	print_r($match);
}else{
	echo "没有匹配到任何内容";
}




 ?>