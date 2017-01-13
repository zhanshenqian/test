<?php 

/*

PHP的面向对象:
	
	1.什么类?
	2.怎么创建一个类
	3.如何通过类来创建一个对象
	4.类有哪一些特征
	5.如何访问类里面的属性和方法

*/

//创建类: 通过class关键字创建类

class Person{  //创建一个Person类

	public $a = 10; //public 定义一个公共属性

	private $b = 20; //private 定义一个私有属性

	public function fn1(){  //定义一个类的公共方法  默认的前面的public可以不写的

		return 123;

	}

	function fn2(){  

		return $this->b;

	}

	private function fn3(){ //定义一个类的私有方法
		return 456;
	}

	function fn4(){
		return $this->fn3();
	}

}

$obj1 = new Person();  //通过Person类创建一个对象实例

// echo $obj1->a; //访问对象的属性 (可以访问到公共属性)

// echo $obj1->b;  //无法访问到对象的私有属性

// echo $obj1->fn1();  //可以访问对象的公共方法

// echo $obj1->fn2(); //可以通过调用公共方法的方式来显示私有属性

// echo $obj1->fn3(); //无法访问到对象的私有方法

echo $obj1->fn4();  //可以通过调用公共方法的方式来显示私有方法

/*

公共属性: 在类外可以随意访问
私有属性: 只能在类里面使用

通过类创建出来的对象:
	1.可以访问类的公共属性和公共方法
	2.访问不了类的私有属性和私有方法

*/

 ?>