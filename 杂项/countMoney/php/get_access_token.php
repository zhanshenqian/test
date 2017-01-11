<?php 
include_once("url_request.php");
include_once("config.php");

//从网上获取一个新的access_token。原有的access_token将失效，消耗一次使用次数。
function getNewAccessToken(){
	$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".appID."&secret=".appSecret;
	$response = httpGet($url);
	$obj = json_decode($response);
	if(isset($obj->errcode)){
		return "errcode:".$obj->errcode.",errmsg:".$obj->errmsg;
	}else{
		return $obj->access_token;
	}
}

$url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=wxf0efccaca40b4143&secret=27c7f15be3b8d344332e00f36dc35960&code=041RJPxn04snZe12Eexn0VfMxn0RJPx6&grant_type=authorization_code";


echo httpGet($url);


//echo getNewAccessToken();



// http://cuiyayun.applinzi.com/get_code.php

// https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxf0efccaca40b4143&redirect_uri=http://cuiyayun.applinzi.com/weChatSDK/get_code.php&response_type=code&scope=snsapi_base&state=123#wechat_redirect

// https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxf0efccaca40b4143&redirect_uri=http://cuiyayun.applinzi.com/weChatSDK/get_code.php&response_type=code&scope=snsapi_userinfo&state=hdgkas#wechat_redirect


// https://api.weixin.qq.com/sns/oauth2/access_token?appid=wxf0efccaca40b4143&secret=27c7f15be3b8d344332e00f36dc35960&code=041RJPxn04snZe12Eexn0VfMxn0RJPx6&grant_type=authorization_code

// https://api.weixin.qq.com/sns/userinfo?access_token=3uTMNKXIqtMyTbuE_ecpoCjhXaY0VawLdsr_wvAcWa6268nBd7-WfFeV_R3_4rYG4228tvhMiyNBYy438j6eXoxmU22sYHKM7cKI8szm40M&openid=oa9qMwM8p790Adm7aHmFVIexSaMU&lang=zh_CN

// {"access_token":"3uTMNKXIqtMyTbuE_ecpoCjhXaY0VawLdsr_wvAcWa6268nBd7-WfFeV_R3_4rYG4228tvhMiyNBYy438j6eXoxmU22sYHKM7cKI8szm40M","expires_in":7200,"refresh_token":"5dkksPMyK7PHZ1WJ6VFumi8tpGtGpEoqO3wyVmdmGqV6SpMBUEamF641KjYh-85fNeH9NdUZJq2smKqxiKUHLRYWfKZ4Yie6AAfrNai1Cf0","openid":"oa9qMwM8p790Adm7aHmFVIexSaMU","scope":"snsapi_userinfo"}

 ?>