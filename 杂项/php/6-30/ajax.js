<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<script>

		var obody = document.getElementsByTagName("body")[0];

		var xhr = null;

		//创建ajax的兼容写法
		//通过判断特定属性的方式来检测浏览器品牌,这里是通过检测浏览器是否有ActiveXObject控件来检测当前浏览器是否是ie浏览器
		if(window.ActiveXObject){
			//ie浏览器创建ajax对象
			xhr = new ActiveXObject('Microsoft.XMLHTTP');
		}else{
			//标准浏览器中创建ajax对象:
			xhr = new XMLHttpRequest();
		}

		console.log(xhr.readyState);

		xhr.onreadystatechange = function(){
		/*
		当ajax请求状态发生改变时,会触发onreadystatechange事件,同时将状态储存在ajax对象的readyState属性中

		*/
			console.log(xhr.readyState);

			//当请求完成,服务器成功返回状态信息之后,处理请求结果
			if(xhr.readyState == 4){

				//当http状态为200时,说明请求成功
				if(xhr.status == 200){

					//当服务器返回的是一个文本信息时,会将这个文本信息存储到ajax对象中的responseText属性中
					obody.innerHTML = xhr.responseText;

				}
			}

		}

		//以post的方式向post1.php页面发送ajax请求
		xhr.open('post','post2.php'); 

		//post方式需要设置传送的数据内容的数据类型
		xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

		//post方式通过send方式来传递数据
		//为了避免中文传输时可能会产生的编码问题,可以调用encodeURI()方法对数据进行格式化
		xhr.send(encodeURI('name="小白"&age=15'));



	</script>
</body>
</html>