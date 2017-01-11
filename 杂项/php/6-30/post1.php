<?php
$id = @$_POST['id'];
if (!$id) {
	echo '{"success":false,"msg":"id不存在"}';
	exit();
}
require 'php.php';
// 响应ajax请求，并返回一个字符串
// echo "这是一个php返回的一段文字";
$sql = "SELECT * FROM `users` WHERE `id` = {$id}";
$results = $mysqli->query($sql);

$row = $results->fetch_assoc();

//如果不存在指定id的数据,返回对应的提示信息
if(!$row["name"]){
	echo '{"success":false,"msg":"id为'.$id.'的数据不存在!"}';
	exit();
}

//给关联数组添加一个提示信息值,成功请求成功
$row["success"] = true;
$str = json_encode($row);
echo $str;