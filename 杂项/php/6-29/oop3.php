<?php 

class Person{

	function __construct($name,$age){
		$this->name = $name;
		$this->age = $age;
	}

	function say(){
		echo "我叫{$this->name},我今年{$this->age}岁/";
	}

}

//创建一个新的类Girl,并且从Person类中继承属性和方法
class Girl extends Person{

	//给Girl类添加自己的公共方法
	function dance(){
		echo "我会拉丁舞";
	}
}

$xiaoming = new Person('小明',18);
// $xiaoming->$dance(); //小明没有dance方法
$xiaoming->say();

$xiaohong = new Girl('小红',19);
$xiaohong->say();
$xiaohong->dance();

 ?>