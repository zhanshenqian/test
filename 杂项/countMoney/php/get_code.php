<?php 
	include_once("config.php");
	include_once("url_request.php");
	include_once("rankingOP.php");
	$code = $_GET["code"];
	
	function get_access_token($code){
		$url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".appID."&secret=".appSecret."&code={$code}&grant_type=authorization_code";
		$response = httpGet($url);
		return $response;
	}

	$response = get_access_token($code);
	$obj = json_decode($response);
	$access_token = $obj->access_token;
	$openid = $obj->openid;

	function getUserInfo($access_token,$openid){
		$url = "https://api.weixin.qq.com/sns/userinfo?access_token={$access_token}&openid={$openid}&lang=zh_CN";
		$response = httpGet($url);
		return $response;
	}

	session_start();
	$_SESSION['openid']=$openid;
	$userJsonStr = getUserInfo($access_token, $openid);
	if (isUserExists($openid) == false) {
		insertUser($userJsonStr);	
	}
	echo "<script>window.location.href='../index.html'</script>";

 ?>