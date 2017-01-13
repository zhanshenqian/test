<?php 

$mysqli = @new mysqli('localhost','root','','SHH160302');

$mysqli->query('set names utf8');

//编写更新语句
$sql = "UPDATE movies SET `name` = '叶问2',`year` = 2014 WHERE `id` = 24";//前面的name和year是要更新的内容   后面的id指的是更新哪一个

//执行sql语句
$result = $mysqli->query($sql);

if($result){

	echo "更新成功";
}else{

	echo "更新失败";

}

//关闭数据库连接
$mysqli->close();
 ?>