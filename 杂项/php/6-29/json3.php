<?php 

$mysqli = new mysqli('localhost','root','','SHH160302');
$mysqli->query("set names utf8");

$sql = "SELECT * FROM `movies`";

$results = $mysqli->query($sql);

$row = $results->fetch_row();

$str = json_encode($row);

var_dump($str);

$mysqli->close();



 ?>