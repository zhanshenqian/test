<?php 


//1.连接数据库
$mysqli = @new mysqli('localhost','root','','SHH160302');
//new mysqli(连接的服务器地址,连接数据库的用户名,连接数据库的密码,默认值是空,连接的数据库名称)

//2.声明编码格式为utf-8
$mysqli->query('set names utf8');  //不加会乱码


//2编写sql语句
$sql = "SELECT * FROM movies";

//3执行sql语句
$results = $mysqli->query($sql);

// print_r($results);
//4.输出查询信息
//php数组 : 索引数组  关联数组
// $row = $results->fetch_assoc();  //调用一次出来一条信息
// //以关联数组的格式返回一条数据

// print_r($row);


// $row = $results->fetch_assoc();   //再调用一条信息
// //以关联数组的格式返回一条数据

// print_r($row);

//以关联数组的方式显示所有数据
// while ( $row = $results->fetch_assoc()) {
// 	print_r($row);
// }

//以索引数组的方式显示所有数据
// while ( $row = $results->fetch_row()) {
// 	print_r($row);
// }

//同时以索引数组和关联数组两种形式显示所有数据
// while ( $row = $results->fetch_array()) {
// 	print_r($row);
// }

//以关联数组的方式显示所有数据
/*while ( $row = $results->fetch_array(MYSQLI_ASSOC)) {
	print_r($row);
}*/

//以索引数组的方式显示所有数据
while ( $row = $results->fetch_array(MYSQLI_NUM)) {
	print_r($row);
}

//关闭数据库连接
$mysqli->close();


 ?>