<?php 

//查询到所有的影片信息,只显示id,name和area项

//1.连接数据库

$mysqli = @new mysqli('localhost','root','','SHH160302');

//2.声明编码格式为utf-8
$mysqli->query('set names utf8');

$count = $mysqli->query("SELECT count(`id`) FROM `movies`");

$count = $count->fetch_row()[0];

$index = $count - (15+5);


//2编写sql语句
$sql = "SELECT * FROM `movies` order by id desc LIMIT {$index},5";;

//3执行sql语句
$results = $mysqli->query($sql);



//以索引数组的方式显示所有数据
while ( $row = $results->fetch_array(MYSQLI_ASSOC)) {
	print_r($row);
}
 ?>