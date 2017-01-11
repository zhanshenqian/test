<?php 

/*

超全局变量:
	在整个php文档的任何一个位置上都可以访问到这些变量

*/


// echo $_SERVER;  //直接输出没有什么太大的意义

// echo $_SERVER['SERVER_NAME'];  //当前服务器的主机名

// echo $_SERVER['REMOTE_ADDR'];  //访问的ip地址  ::1 表示本地访问(本机)

// echo $_SERVER['REQUEST_URI'];  //页面地址的文件路径

// echo $_SERVER['HTTP_USER_AGENT'];  //用户代理信息


function fn1(){
	echo "fn1" . $_SERVER['HTTP_USER_AGENT'];
}
fn1();
 ?>