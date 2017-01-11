<?php

//查询到所有的影片信息,只显示id name和area项

//1.连接数据库
$mysqli = @new mysqli('localhost','root','','SHH160302');

//2.声明编码格式为utf-8
$mysqli->query('set names utf8');  //不加会乱码

//3.编写sql语句
$sql = "SELECT `id`,`name`,`area` FROM movies";

//4.执行sql语句
$results = $mysqli->query($sql);

//以索引数组的方式显示所有数据
while ( $row = $results->fetch_array(MYSQLI_NUM)) {
	print_r($row);
}

//关闭数据库连接
$mysqli->close();
?>