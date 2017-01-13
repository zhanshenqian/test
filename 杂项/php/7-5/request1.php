<?php 
function httpGet($url){
$cURL = curl_init();
curl_setopt($cURL, CURLOPT_URL, $url);
curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
 
$response = curl_exec($cURL);
curl_close($cURL);

return $response;
}

$url =  "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx659ca3cb38648299&secret=3d381aa53e9971b05186b6276d3771b4"; 
echo httpGet($url);
function httpPost($url,$postdata){
	$cURL = curl_init();
	curl_setopt($cURL, CURLOPT_URL, $url);
	curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($cURL, CURLOPT_POST, true);
	curl_setopt($cURL, CURLOPT_POSTFIELDS, $postdata);
	$response = curl_exec($cURL);

	curl_close($cURL);
	return $response;
}
 ?>