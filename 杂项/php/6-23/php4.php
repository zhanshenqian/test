<?php 

/*

switch 语句判断条件一旦成立,就会执行case中的语句,如果case语句后面没有break语句,就会继续执行下一个case中的代码,并且忽略这个case的判断条件,一直执行直到遇到break语句或者switch结束


*/

$a = 5;

switch ($a) {
	case 5: echo 5;
		// break;
	
	case 6: echo 6;
		// break;

	case 7: echo 7;
		// break;

	case 8: echo 8;
		// break;

	default:
		echo $a;
		break;
}
 ?>