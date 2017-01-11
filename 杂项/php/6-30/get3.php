<?php 

$id = @$_GET['id'];

if(!$id){
	exit('id不存在');
}

//引入连接数据库的配置文件
require 'php.php';

//响应ajax请求,并返回一个字符串
// echo "这是php返回的一段文字";

$sql = "SELECT * FROM `users` WHERE `id` = {$id}";

$results = $mysqli -> query($sql);

$arr = [];

$row = $results -> fetch_assoc();


//将保存所有数据的数组转成json字符串
$str = json_encode($row);

//将字符串数据返回给前端页面
echo $str;

//关闭数据库连接
$mysqli -> close();

 ?>