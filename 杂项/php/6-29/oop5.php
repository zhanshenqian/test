<?php 

/*

类的封装:
	通过在类内部定义一个公共方法,将类的私有属性或受保护的属性提供一个对外访问的接口,起到保护属性的作用

封装的好处:
	保护特定的属性不能被外部随意修改,只能通过提供的特定方法来修改

*/

class Person{

	private $sex;
	protected $name;
	protected $age;

	function __construct($name,$sex,$age){

		$this->name = $name;
		$this->sex = $sex;
		$this->age = $age;

	}

	function setName($name){
		$this->name = $name;
	}

	function getSex(){
		return $this->sex;
	}

	function addAge(){
		$this->age++;
	}

	function say(){
		echo "我叫{$this->name},我是{$this->sex}生,我今年{$this->age}岁";
	}

}

$xiaoming = new Person('小明','男',18);

// $xiaoming->name = "大明";  //无法更改name属性
$xiaoming->setName('大明');
$xiaoming->addAge(); //每调用一次 age就增加1
$xiaoming->say();


 ?>