<?php 

//引入连接数据库的配置文件
require 'php.php';

//响应ajax请求,并返回一个字符串
// echo "这是php返回的一段文字";

$sql = "SELECT * FROM `users`";

$results = $mysqli -> query($sql);

$arr = [];

while ($row = $results -> fetch_assoc()) { //重复调用,直到users里没有数据

	
	array_push($arr,$row);
}


//将保存所有数据的数组转成json字符串
$str = json_encode($arr);

//将字符串数据返回给前端页面
echo $str;



 ?>