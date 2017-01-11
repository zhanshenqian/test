<?php 

	$score = $_GET["score"];
	$userJsonStr = $_SET["userJsonStr"];
	updateUserInfo($userJsonStr,$score);



//向数据库ranking表中插入数据
function insertUser($userJsonStr){
	$user = json_decode($userJsonStr);
	
	$openid = $user->openid;
	$nickname = $user->nickname;
	$sex = $user->sex ? "男":"女";
	$city = $user->city;
	$province = $user->province;
	$country = $user->country;
	$headimgurl = $user->headimgurl;

	$mysqli = new mysqli("localhost","root","","SHH160301");
	if($mysqli->connect_errno){
		die($mysqli->connect_error);
	}
	$mysqli->query("set names utf8");
	$sql = "INSERT INTO ranking(openid,nickname,sex,city,province,country,headimgurl) VALUES('$openid','$nickname','$sex','$city','$province','$country','$headimgurl')";
	$result = $mysqli->query($sql);
	// if ($result) {
	// 	echo "添加成功";
	// }else{
	// 	echo "添加失败";
	// }
	$mysqli->close();
}

//判断指定openid用户是否存在
function isUserExists($openid){

	$mysqli = new mysqli("localhost","root","","SHH160301");
	if($mysqli->connect_errno){
		die($mysqli->connect_error);
	}
	$mysqli->query("set names utf8");
	$sql = "SELECT * FROM ranking WHERE openid = '{$openid}'";
	$result = $mysqli->query($sql);
	if ($result->num_rows > 0) {
		$isExist = true;
	}else{
		$isExist = false;
	}
	$mysqli->close();
	return $isExist;
}

//更新指定openid用户的分数
function updateScore($openid, $score){
	$mysqli = new mysqli("localhost","root","","SHH160301");
	if ($mysqli->connect_errno) {
		die($mysqli->connect_error);
	}
	$mysqli->query("set names utf8");
	$sql = "UPDATE ranking SET score = {$score} WHERE openid = '{$openid}'";
	$result = $mysqli->query($sql);
	// if ($result) {
	// 	echo "更新成功";
	// }else{
	// 	echo "更新失败";
	// }
	$mysqli->close();
}

//获取指定openid用户的score
function getScoreOfUser($openid){
	$mysqli = new mysqli("localhost","root","","SHH160301");
	if($mysqli->connect_errno){
		die($mysqli->connect_error);
	}
	$mysqli->query("set names utf8");
	$sql = "SELECT * FROM ranking WHERE openid = '{$openid}'";
	$result = $mysqli->query($sql);
	if ($result->num_rows > 0) {
		$user = $result->fetch_assoc();
		$score = $user["score"];
	}else{
		$score = 0;
	}
	$mysqli->close();
	return $score;
}

function updateUserInfo($userJsonStr,$score){
	$user = json_decode($userJsonStr);
	$openid = $user->openid;
	if (isUserExists($openid) == false) {
		insertUser($userJsonStr);	
	}
	if($score > getScoreOfUser($openid)){
		updateScore($openid,$score);
	}
}




 ?>