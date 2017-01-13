<?php

$id = $_GET['id'];

//如果没有传id过来,就没有办法知道要删除那一条影片信息
if( !$id ){
  exit('没有id！');
}

$mysqli = new mysqli('localhost','root','','SHH160302');
$mysqli->query('set names utf8');

$sql = "DELETE FROM movies WHERE `id`={$id}";

$result = $mysqli->query($sql);

if( $result ){
  echo '删除成功！<a href="javascript:history.go(-1);">返回</a>';
}else{
  echo '删除失败！<a href="javascript:history.go(-1);">返回</a>';
}

$mysqli->close();

// echo '<script>window.history.go(-1);</script>';

?>