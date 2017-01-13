<?php 


require_once("httpRequest.php");
	
//本文件包含了若干个函数，这些函数封装了对微信API的使用。
//外界使用者只需要通过使用
//require_once("weChatAPI.php");
//引入并使用本文件中的函数，实现自己想要的功能。

//定义常量APPID，注意：要替换成自己的appID
define('APPID', 'wxf0efccaca40b4143');
//定义常量APPID，注意：要替换成自己的appID
define('APPSECRET', '27c7f15be3b8d344332e00f36dc35960');


//本函数是从微信服务器获取access_token相关信息。获得新access_token的同时，旧的access_token将不再可用。同时会消耗一次接口使用次数。
function getNewAccessTokenInfo(){
	$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".APPID."&secret=".APPSECRET;
	$res = httpGet($url);
	return $res;
}

//获取access_token。先查看本地文件中是否存储了access_token，如果没有存储，获取一个access_token，并存入文件。如果存储了access_token，看是否过期，如果过期了，获取一个access_token，并存入文件，如果没有过期，直接使用。
function getAccessToken(){
	
	$jsonStr = readAccessToken();
	if(!$jsonStr){//如果文件中没东西
		//获取access_token相关信息
		$access_token_info = getNewAccessTokenInfo();
		$obj = json_decode($access_token_info);
		$savedObj = (object)null;
		$savedObj->access_token = $obj->access_token;
		$savedObj->expires_time = time() + ($obj->expires_in - 100);
		$jsonStr = json_encode($savedObj);
		saveAccessToken($jsonStr);//将数据存入文件
		return $savedObj->access_token;

	}else{//如果读到了内容
		$obj = json_decode($jsonStr);
		$currentTime = time();//当前时间
		$expires_time = $obj->expires_time;//过期时间
		if ($currentTime < $expires_time) {//如果access_token没过期
			$access_token = $obj->access_token;
			return $access_token;
		}else{//如果access_token过期了
			//获取access_token相关信息
			$access_token_info = getNewAccessTokenInfo();
			$obj = json_decode($access_token_info);
			$savedObj = (object)null;
			$savedObj->access_token = $obj->access_token;
			$savedObj->expires_time = time() + ($obj->expires_in - 100);
			$jsonStr = json_encode($savedObj);

			saveAccessToken($jsonStr);//将数据存入文件
			return $savedObj->access_token;
		}
	}
}

use sinacloud\sae\Storage as Storage;

//将access_token等信息存入文件
function saveAccessToken($jsonStr){
	//使用新浪SAE的Storage，存储我们的access_token以及过期时间
	
	$s = new Storage();//创建一个Storage对象
	//在wechatbucket创建一个文件access_token.txt，文件的内容是$jsonStr。
	$s->putObject($jsonStr, "wechatbucket", "access_token.txt", array(),array('Content-Type'=>'text/plain;charset=utf-8'));
}

//从文件中读取access_token信息
function readAccessToken(){
	$s = new Storage();//创建一个Storage对象
	$data = $s->getObject("wechatbucket","access_token.txt");
	$jsonStr = $data->body;
	return $jsonStr;
}



echo getAccessToken();



 ?>