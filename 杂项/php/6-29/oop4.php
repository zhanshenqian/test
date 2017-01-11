<?php 

/*
公共属性/方法:
	1.在任何位置都可以访问到公共属性或方法
	2.可以被子类继承

私有属性/方法:
	1.只能在类的大括号范围里面才能访问到
	2.不能被子类继承

受保护的属性/方法:
	1.只能在类的大括号范围里面才能访问到
	2.可以被子类继承,但是只能在子类里面使用,不能被子类的实例调用
*/

class Person{

	public $a = 10;  //用来声明一个公共属性或方法
	private $b = 20;  //用来声明一个私有属性或方法
	protected $c = 30;  //用来声明一个受保护的属性或方法

	function fn1(){
		return $this->b;
	}
	function fn2(){
		return $this->c;
	}
}

class Child extends Person{
	function fn3(){
		return $this->b;
	}
	function fn4(){
		return $this->c;
	}
}

$obj1 = new Child();
echo $obj1->a;  //这里可以继承Person的公共属性
echo $obj1->fn1();
echo $obj1->fn2();

echo $obj1->fn3();  //子类无法继承Person里的私有属性
echo $obj1->fn4();  //子类可以继承Person里的受保护属性

 ?>