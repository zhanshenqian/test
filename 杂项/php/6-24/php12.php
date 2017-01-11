<?php 

$str = <<<END

	<div>
		
		<h2>这是文章标题</h2>
		<h3>作者: lanou   来源:蓝鸥论坛   阅读:123</h3>
		<p>我们今天学习的是php</p>

	</div>

END;

// echo $str;
echo htmlspecialchars($str);

/*

htmlspecialchars() : 将 html 代码中的各种符号，转换成转义字符的形式。

目的：不让浏览器解析 html 标签。

*/

 ?>