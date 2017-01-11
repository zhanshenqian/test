<?php 

$mysqli = new mysqli('localhost','root','','SHH160302');

$mysqli->query("set names utf8");

$sql = "SELECT * FROM `users`";

$results = $mysqli->query($sql);

$arr = [];

while ($row = $results -> fetch_assoc()){

	array_push($arr, $row);
}

$str = json_encode($arr);

echo $str;




 ?>