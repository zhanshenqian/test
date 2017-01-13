<?php

//@的作用:隐藏警告信息
$id = @$_GET['id'];
$sub = @$_GET['submit'];

//异常处理:如果既不是添加新影片,也不是更新影片信息,就直接退出,不继续执行下面的php脚本
if( !$id && $sub <> '添加' ){
  exit('id不存在！');
}

$name = @$_GET['name'];
$type = @$_GET['type'];
$area = @$_GET['area'];
$year = @$_GET['year'];

// echo $name . $type . $area . $year;

//连接数据库
$mysqli = new mysqli('localhost','root','','SHH160302');

//设置编码格式
$mysqli->query('set names utf8');

if( $sub == '更新' ){

  $sql = "UPDATE movies SET `name`='{$name}',`type`='{$type}',`area`='{$area}',`year`='{$year}' WHERE `id`={$id}";

  // echo $sql;

  $result = $mysqli->query($sql);

  if( $result ){
    echo '更新成功！<a href="javascript:history.go(-1);">返回</a>';
  }else{
    echo '更新失败！<a href="javascript:history.go(-1);">返回</a>';
  }
  
}else{

  //编写sql插入语句
  //$sql = "INSERT INTO movies (`name`,`type`,`area`,`year`) VALUES ('{$name}',{$type},{$area},'{$year}')";  另一种写法
  $sql = "INSERT INTO movies (`id`,`name`,`type`,`area`,`year`) VALUES (NULL,'{$name}',{$type},{$area},'{$year}')";

  //执行sql语句
  $result = $mysqli->query($sql);

  if( $result ){
    echo '添加成功！<a href="javascript:history.go(-1);">返回</a>';
  }else{
    echo '添加失败！<a href="javascript:history.go(-1);">返回</a>';
  }
}

$mysqli->close();

?>