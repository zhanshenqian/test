<?php 

//引入连接数据库的配置文件
require 'php.php';

//响应ajax请求,并返回一个字符串
// echo "这是php返回的一段文字";

$sql = "SELECT * FROM `users`";

$results = $mysqli -> query($sql);

//以关联数组形式取出一条数据
$row = $results -> fetch_assoc();


//将关联数组转换成json字符串
$str = json_encode($row);

//将字符串数据返回给前端页面
echo $str;

//关闭数据库连接
$mysqli -> close();

 ?>