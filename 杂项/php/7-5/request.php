<!-- <?php 
function httpGet($url)
{
	//使用cURL进行网络请求。cURL是一套函数，包含若干个函数。
	//创建一个用于网络请求的变量（可以简单理解为对象）。
	$cURL = curl_init();

	curl_setopt($cURL,CURLOPT_URL, $url );
	curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
	//...
	$response = curl_exec($cURL);
	curl_close($cURL);
	return $response;
}
	
	$token = "5lKxbBRJ4v9fAjPX0L82z7K5blff721aTqwEO8uuerG_5erMc41X6F_YjhxTvB0xM51QAsEziihWcg-MwsPKkA8jgmMsrVl_1No8xdYld4UYg8AjCyBb2ANYDyiJ1he_EZTbAHAIDX";

	$url = "https://api.weixin.qq.com/cgi-bin/user/get?access_token={$token}&next_openid=";
	echo httpGet( $url );

	 ?> -->
<?php 
function httpPost($url,$postdata)
{
	//使用cURL进行网络请求。cURL是一套函数，包含若干个函数。
	//创建一个用于网络请求的变量（可以简单理解为对象）。

	
	
	

	$cURL = curl_init();

	curl_setopt($cURL,CURLOPT_URL, $url );

	curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);

	curl_setopt($cURL, CURLOPT_POST, true);

	curl_setopt($cURL, CURLOPT_POSTFIELDS, $postdata);
	//...
	$response = curl_exec($cURL);
	curl_close($cURL);
	return $response;
}
	$postdata = '{
"openid":"oEOkqw9vOjgiS58sx7B5iyhItF_E",
"remark":"gangzi"
}';
	$token = "5lKxbBRJ4v9fAjPX0L82z7K5blff721aTqwEO8uuerG_5erMc41X6F_YjhxTvB0xM51QAsEziihWcg-MwsPKkA8jgmMsrVl_1No8xdYld4UYg8AjCyBb2ANYDyiJ1he_EZTbAHAIDX";
	$url = "https://api.weixin.qq.com/cgi-bin/user/info/updateremark?access_token={$token}";

	// $url = "https://api.weixin.qq.com/cgi-bin/user/info/updateremark?access_token=ACCESS_TOKEN";
	echo httpPost( $url, $postdata);
	 ?>