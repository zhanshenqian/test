<?php 

$arr = [1,2,3,4];  //这是后端写的数组

$str = json_encode($arr); //将后端写的数组转换成字符串再给前端使用(把数组形式的值转换成字符串)

$str1 =<<<HTML

<script>
	
	// alert(123);


	var arr2 = $str;  //前端使用后端写的数组

	console.log(arr2);

	alert( arr2[3]);

</script>
HTML;

echo $str1;

/*

php数组没办法直接提供给前端使用

*/

 ?>