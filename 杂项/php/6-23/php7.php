<?php 

//跳出与跳过

for($i = 0;$i<5;$i++){

	// if($i == 3)break;
	//立即停止循环,break后面的语句不再执行

	if($i == 3)continue;
	//跳过当前循环,break后面的语句不再执行,继续执行下一次循环

	echo $i;
}



/*
函数返回值

1.把return后面的结果返回出来
2.提前结束函数里的代码执行,return后面的代码都不再执行

*/


function fn1($a){

return $a * 10;

echo 123;  //该段代码不执行

}

echo fn1(10);
 ?>