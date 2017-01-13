<?php 

class Person{

	function __construct($name,$age){
	//__construct: 构造函数  这个函数会在new Person时被自动调用,如果在new Person()时传了参数,这些参数也会默认传递给__construct函数

		$this->name = $name;
		$this->age = $age;

	}

	function say(){
		echo "我叫{$this->name},我今年{$this->age}岁";
	}

}

$xiaoming = new Person('小明',18);
$xiaohong = new Person('小红',19);


echo $xiaoming->name; 
echo $xiaohong->age;


// $xiaoming->say();
// $xiaohong->say();


 ?>