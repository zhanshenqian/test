<?php 

//本文件包含了2个网络请求相关的函数。
//这两个函数分别封装了get和post网络请求。

//任何需要使用网络请求的php文件可以通过
//require_once("httpRequest.php");   //注意文件路径要写正确
//引入本文件，通过调用httpGet或者httpPost进行get或者post请求。
//


//get请求，需要一个url作为参数
function httpGet($url){
	//使用cURL进行网络请求。cURL是一套函数，包含若干个函数。
	//创建一个用于网络请求的变量（可以简单想象为对象）。
	$cURL = curl_init();

	//做一些网络相关的设置。
	curl_setopt($cURL, CURLOPT_URL, $url);//设置需要访问的url
	curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);//本设置作用于curl_exec函数。curl_exec函数 默认返回一个表示请求成功与否的bool值，并且函数内部自带echo语句，echo请求到的数据内容。但很多情况下，我们不希望这个结果被打印出来，而是希望用一个变量去接收（保存）请求到的数据，便于以后使用。CURLOPT_RETURNTRANSFER设置为true，会让curl_exec函数返回请求到的数据（不在返回bool值），并且curl_exec不会再自动打印请求的数据。

	//执行网络请求，并接收请求的数据。
	$response = curl_exec($cURL);

	//关闭请求，并释放请求过程中占用的资源
	curl_close($cURL);

	return $response;
}

//post请求，需要2个参数，请求的url以及需要post的内容。
function httpPost($url, $postdata){
	//使用cURL进行网络请求。cURL是一套函数，包含若干个函数。
	//创建一个用于网络请求的变量（可以简单想象为对象）。
	$cURL = curl_init();

	//做一些网络相关的设置。
	curl_setopt($cURL, CURLOPT_URL, $url);//设置需要访问的url
	curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);//本设置作用于curl_exec函数。curl_exec函数 默认返回一个表示请求成功与否的bool值，并且函数内部自带echo语句，echo请求到的数据内容。但很多情况下，我们不希望这个结果被打印出来，而是希望用一个变量去接收（保存）请求到的数据，便于以后使用。CURLOPT_RETURNTRANSFER设置为true，会让curl_exec函数返回请求到的数据（不在返回bool值），并且curl_exec不会再自动打印请求的数据。
	curl_setopt($cURL, CURLOPT_POST, true);//设置请求方式是post
	curl_setopt($cURL, CURLOPT_POSTFIELDS, $postdata);//设置需要post的内容

	//执行网络请求，并接收请求的数据。
	$response = curl_exec($cURL);

	//关闭请求，并释放请求过程中占用的资源
	curl_close($cURL);

	return $response;
}



 ?>