function ajax(method,url,data,success) {

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

				//另一种ajax的创建方法
				// try{

				// 	xhr = new XMLHttpRequest();

				// }catch(e){

				// 	xhr = new ActiveXObject('Microsoft.XMLHTTP');

				// }


				//等待服务器返回内容
				xhr.onreadystatechange = function(){
				/*
				当ajax请求状态发生改变时,会触发onreadystatechange事件,同时将状态储存在ajax对象的readyState属性中

				*/

					//readyState : ajax工作状态
					//当请求完成,服务器成功返回状态信息之后,处理请求结果
					if(xhr.readyState == 4){

						//status : 服务器状态,http状态码
						//当http状态为200时,说明请求成功
						if(xhr.status == 200){


							success && success(xhr.responseText);

							

							//当服务器返回的是一个文本信息时,会将这个文本信息存储到ajax对象中的responseText属性中
							console.log(xhr.responseText);
						}
					}

				}

				if(method == 'get' && data){
					url += '?' + data;
				}

				xhr.open(method,url,true); //建立连接

				if(method == 'get'){
					xhr.send();
				}else{
					xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
					xhr.send(data);
				}
				
				//向get.php页面发送请求
				// xhr.send(null);
				//发送请求
				/*
				get方式发送请求,send()中不需要附带任何数据
				post方式发送请求,如果需要提交数据,数据是放在send()中作为参数传到服务器端
				*/		

}