<?php 

$user = $_GET['user'];
$password = $_GET['password'];
//通过get方式提交的数据,默认会保存到 $_GET 超全局变量中

// $user = $_POST['user'];
// $password = $_POST['password'];
//通过post方式提交的数据,默认会保存到 $_POST	超全局变量中


/*

get 方式提交数据:
	1.通过地址栏提交
	2.提交数据有大小限制 最大不超过2048b(不同浏览器可能有小的偏差)

post 方式提交数据:
	1.通过浏览器背后隐藏提交的
	2.没有大小限制(服务器会做大小限制)
*/


// echo '用户名:'.$user.',密码:'.$password;
// echo '用户名: $user,密码: $password'; //有问题
//单引号的字符串中,不能使用变量 


// echo "用户名:$user,密码:$password";
echo "用户名:{$user},密码:{$password}";
//php中双引号包含的字符串中,可以使用变量
//变量名称会尽可能地匹配多的字符,所以为了避免解析错误,变量名称建议使用{}包起来

// echo '用户名是："{$user}"';
echo "用户名是：'{$user}'";
//以最外层的引号来判断字符串是单引号字符串还是双引号字符串

 ?>