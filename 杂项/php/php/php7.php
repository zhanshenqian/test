<?php 

/*

常量:一旦定义好以后,就不能再修改它的值. 所有位置都可以访问到定义的常量

使用define()方法定义一个常量

define(常量名,常量的值,是否忽略大小写)  建议第三个参数  保持false


*/

// define("PI",3.14159,false);

// echo PI;


define("PI",3.141591,true);
// echo pI;
echo pi;

//内置常量

echo DIRECTORY_SEPARATOR; //路径符号/

echo PATH_SEPARATOR; //路径分隔符 :

echo PHP_OS;  //当前操作系统名称

echo PHP_VERSION;  //PHP的版本号


//魔术常量

echo __LINE__;  //当前是第几行代码

echo __FILE__;  //当前文件的完整路径地址

function fn3(){
	echo __FUNCTION__; //当前所在函数的函数名
}
fn3();


 ?>