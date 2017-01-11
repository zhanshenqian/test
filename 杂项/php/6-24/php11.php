<?php 

// $str = 'fvbdh';
// echo strrev($str);  //strrev()  反转字符串

// $str1 = "你好!\n世界";
// echo nl2br($str1);     //nl2br()  把转换字符形式的\n \r换行,替换成<br>标签


$html = "<div><h2>这是一个标题</h2></div>";

// echo $html;
echo strip_tags($html , '<h2>');
//去掉字符串的html,xml,php标签,第二个参数 可以设置允许保留的标签列表
 ?>