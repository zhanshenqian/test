<?php 

$mysqli = @new mysqli('localhost','root','','SHH160302');

$mysqli->query('set names utf8');

//编写删除语句
$sql = "DELETE FROM movies WHERE `id` = 6";

$result = $mysqli->query($sql);

if($result){

	echo "删除成功";
}else{

	echo "删除失败";

}

//关闭数据库连接
$mysqli->close();
 ?>