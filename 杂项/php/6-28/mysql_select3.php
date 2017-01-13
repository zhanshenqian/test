<?php 

//1.连接数据库
$mysqli = @new mysqli('localhost','root','','SHH160302');

//2.声明编码格式为utf-8
$mysqli->query('set names utf8');  //不加会乱码

//3.编写sql语句
// //只显示所有动作类型的影片
// $sql = "SELECT * FROM `movies` WHERE type = '动作'";

//只显示北美动作类型的影片
// $sql = "SELECT * FROM `movies` WHERE type = '动作' AND area = '北美'";

//只显示除动作类型之外的其他影片
// $sql = "SELECT * FROM `movies` WHERE type<>'动作'";

//只显示第11~15条影片
$sql = "SELECT * FROM `movies` LIMIT 1,4";

$results = $mysqli->query($sql);

while ($row = $results->fetch_array(MYSQLI_NUM)) {
	print_r($row);
}

//关闭数据库连接
$mysqli->close();
 ?>