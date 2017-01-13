<?php
$name = @$_POST['name'];
$age = @$_POST['age'];


if (!$name||!$age) {
	//返回json字符串形式的提示信息
	echo '{"success":false,"msg":"数据不完整"}';
	exit(); //如果请求失败,直接退出
}
require 'php.php';

//统计数据库中现有的数据条数
$results = $mysqli->query("SELECT count(id) FROM `users`");

$arr = $results -> fetch_row();
echo $arr[0];

//没有添加新数据之前  数据库中数据的条数
$total = $arr[0];

$sql = "INSERT INTO `users` (`name`,`age`) VALUES ({$name},{$age})";

$result = $mysqli->query($sql);

//统计添加完新数据之后,数据库中数据的条数
$results = $mysqli->query("SELECT count(id) FROM `users`");

$arr = $results -> fetch_row();

//没有添加新数据之前  数据库中数据的条数
$total2 = $arr[0];

//计算新增了几条数据
$count = $total2 - $total;

if($result){
	echo "添加成功,新增了{$count}条数据";
}else{
	echo "添加失败";
}

?>