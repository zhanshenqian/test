<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	li span{
		display: inline-block;
		line-height: 1.5;
		width: 100px;
		text-align: center;
	}
	.name{
		width: 200px;
	}
	</style>
</head>
<body>
	<ul>
		<li>
			<span>编号</span>
			<span class="name">片名</span>
			<span>类型</span>
			<span>地区</span>
			<span>年份</span>
		</li>
		<?php 

		$mysqli = @new mysqli('localhost','root','','SHH160302');

		$mysqli->query('set names utf8');

		$sql = "SELECT * FROM movies";

		$results = $mysqli->query($sql);

		while ($row = $results->fetch_assoc()) {
			//拼接html结构字符串
			$html =<<<END

			<li>
				<span>{$row['id']}</span>
				<span class = "name">{$row['name']}</span>
				<span>{$row['type']}</span>
				<span>{$row['area']}</span>
				<span>{$row['year']}</span>
			</li>

END;
			//将拼接好的html结构字符串输出到页面中
			echo $html;
		}

		$mysqli->close();

		 ?>
		 
	</ul>
</body>
</html>