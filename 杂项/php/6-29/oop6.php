<?php 

/*

常量:是一个固定的标识符,一旦声明并赋值,就不能在修改

*/

class Person{

	const A = 3.14;
	const B = 3.145;
	const C = 3.1456;

}

$obj1 = new Person();

//访问格式是固定的
//访问类里面定义的变量的第一种方式
echo $obj1::A . ',';

//访问类里面定义的变量的第二种方式
echo Person::B . ',';

//通过一个类名的字符串访问类里面的常量
echo "Person"::C;  //不显示跟sublime的版本有关

 ?>