<?php 

//1.连接数据库
$mysqli = @new mysqli('localhost','root','','SHH160302');
//new mysqli(连接的服务器地址,连接数据库的用户名,连接数据库的密码,默认值是空,连接的数据库名称)

//2.声明编码格式为utf-8
$mysqli->query('set names utf8');  //不加会乱码

$sql = "INSERT INTO movies(`name`,`type`,`area`,`year`) VALUES ('鬼吹灯之寻龙诀','动作','内地',2016)";

//执行sql语句
$result = $mysqli->query($sql);

if($result){
	echo "添加成功";
}else{
	echo "添加失败";
}

//关闭数据库连接
$mysqli->close();
 ?>