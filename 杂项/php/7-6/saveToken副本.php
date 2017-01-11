<?php 

require_once("request1.php");
define('APPID', 'wx659ca3cb38648299');
define('APPSECRET', '3d381aa53e9971b05186b6276d3771b4');





function saveToken($info){
file_put_contents("token.txt", $info);
}

function getTokenInfo(){
	return file_get_contents("token.txt");
}


// 从网络上获取token
function getNewAccessToken(){
	$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=". APPID ."&secret=". APPSECRET;
$res = httpGet($url);
return $res;
}

function getToken(){
	// 读取文件，一遍获取access_token；
	$info = getTokenInfo();
	if (!$info) {
	// 还没有开始往文件里面写入信息，文件内容为空’‘’
	$res = getNewAccessToken();
		// 转换为json对象，有true得话获取的是一个数组
	$obj = json_decode($res);
	// 获取token
	$token = $obj->access_token;
	// 获取过期时间
	$expires_in = $obj->expires_in;
	// 获取当前的时间戳；
	$currentTime = time();
	// 过期时间时间戳
	$expires_time = $currentTime + $expires_in - 100;
	// 把token和expires_time封装到一个对象里面
	// 创建一个空对象
	$savedObj = (object)null;
	$savedObj->access_token = $token;
	$savedObj->expires_time = $expires_time;
	// 把对象转换为字符串形式的json对象
	$jsonStr = json_encode($savedObj);
	saveToken($jsonStr);
	return $token;
	}else{
		$obj = json_decode($info);
		$expires_time = $obj->expires_time;
		$currentTime = time();
		if ($currentTime < $expires_time) {
			// 没有过期，调用access_token
			return $obj->access_token;
		}else{
			$res = getNewAccessToken();
			// 转换为json对象，有true得话获取的是一个数组
			$obj = json_decode($res);
			// 获取token
			$token = $obj->access_token;
			// 获取过期时间
			$expires_in = $obj->expires_in;
			// 获取当前的时间戳；
			$currentTime = time();
			// 过期时间时间戳
			$expires_time = $currentTime + $expires_in - 100;
			// 把token和expires_time封装到一个对象里面
			// 创建一个空对象
			$savedObj = (object)null;
			$savedObj->access_token = $token;
			$savedObj->expires_time = $expires_time;
			// 把对象转换为字符串形式的json对象
			$jsonStr = json_encode($savedObj);
			saveToken($jsonStr);
			return $token;
		}
	}
}

getToken();
// 微信创建公众号菜单
function createMenu(){
	$access_token = getAccessToken();
	$url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token={$access_token}";
	$postdata = ' {
     "button":[
     {	
          "type":"click",
          "name":"我爱你",
          "key":"111"
      },
      {
           "name":"菜单",
           "sub_button":[
           {	
               "type":"view",
               "name":"搜索",
               "url":"http://www.soso.com/"
            },
            {
               "type":"view",
               "name":"视频",
               "url":"http://v.qq.com/"
            },
            {
               "type":"click",
               "name":"赞一下我们",
               "key":"V1001_GOOD"
            }]
       }]
 }';
return httpPost($url,$postdata);
}
echo createMenu();

 ?>