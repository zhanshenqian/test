<?php 

require_once("request1.php");
$code = $_GET["code"];
$state = $_GET["state"];
$url = " https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx659ca3cb38648299&secret=3d381aa53e9971b05186b6276d3771b4&code={$code}&grant_type=authorization_code ";
$res = httpGet($url);
$obj = json_decode($res);
$token = $obj->access_token;
$openid = $obj->openid;


echo $token;
echo $openid;

echo $code;
echo "<hr>";
echo $state;
echo "<hr>";
echo $res
 ?>