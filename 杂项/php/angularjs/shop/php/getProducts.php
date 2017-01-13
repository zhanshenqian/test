<?php
//为我们的应用提供数据
//提供商品列表。（商品是存放在数据库里面的，需要读取数据文件
$mysqli=new mysqli("localhost","root","","wei");
if($mysqli->connect_errno){
	die($mysqli->connect_error);
}
//防止乱码
$mysqli->query("set names utf8");

$sql="SELECT * FROM product";
$result = $mysqli->query($sql);

if($result->num_rows){
	$array = $result->fetch_all(MYSQLI_ASSOC);
	echo json_encode($array);
}
$mysqli->close();
?>
