<?php 

/*

静态属性和静态方法
	访问方式 使用 :: 来访问

*/

class Person{
	static $a = 10; //静态属性

	static function fn1(){ //静态方法
		// echo 'abc';
		// eho $this::$a;  //静态方法中不能使用$this
		echo self::$a;
	}


	function fn2(){  //非静态方法
		echo $this::$a;
	}
}


$obj1 = new Person();

//静态属性
echo $obj1::$a; //第一种访问方式
// echo Person::$a;  //第二种访问方式
// echo "Person"::$a; //不显示跟sublime的版本有关


//静态方法
echo $obj1::fn1();  //第一种访问方式
// echo Person::fn1();  //第二种访问方式
// echo "Person"::fn1();  //不显示跟sublime的版本有关


echo $obj1->fn2();

 ?>