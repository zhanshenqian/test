<?php 

//1.连接数据库
$mysqli = @new mysqli('localhost','root','','SHH160302');

//2.声明编码格式为utf-8
$mysqli->query('set names utf8');  //不加会乱码

//获取数据的总条数,返回的是一个mysql对象
$count = $mysqli->query("SELECT count('id') FROM `movies`");

//将mysql对象形式的总条数转换成索引数组形式
$count = $count->fetch_row()[0];

$index = $count - (15+5);
//当前位置 = 总条数 - (开始位置+提取长度)

//只显示第11~15条影片并降序显示
$sql = "SELECT * FROM `movies` order by id desc LIMIT {$index},5";

$results = $mysqli->query($sql);

while( $row = $results->fetch_assoc() ){
  print_r( $row );
}

//关闭数据库连接
$mysqli->close();
 ?>