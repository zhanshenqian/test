<?php 

/*

正则的修饰符:
	m:匹配多行  需要配合^或$使用,才有效果
	s:让正则表达式中的 . 元字符也可以匹配换行符
	x:忽略掉正则表达式中写的空白字符
	U:如果原来是贪婪匹配,就转成懒惰匹配,如果原来是懒惰匹配,就转成贪婪匹配

*/

$str = <<<END

hfngjkfdshgkj5h86f4s
75hds4fh6dshsfgtbh4ds64
h75gdsj68ds76hjsgjdskgh


END;

$reg = '/[a-z]+$/m';
preg_match_all($reg, $str, $match);
print_r($match);

 ?>