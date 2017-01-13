<?php 

//数据类型:字符串类型

$str1 = "这是一个字符串";
$str2 = "这个字符串里可以使用变量";

$str3 = "这是一个有\"引号\"的字符串";
$title = "这是一个标题";

$str4 = <<<abc

	<div>
		<h2>{$title}</h2>
		<p>"这是一段字符串"</p>
		<p>{$str1},{$str2}</p>
	</div> 
	<div>
		\$这是一段文字,\r这句话前面希望有一个换行.
		$str3
	</div>
abc;
echo $str4;

/*
定界符方式定义字符串

	定界符开始标记  <<<任意字母
	定界符结束标记  开始标记后面所写的字母

	定界符的开始标记和结束标记的前后都不允许出现任何字符
		包括空格等空白字符(结束标记后面的分号除外)


*/

 ?>