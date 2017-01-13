<?php 

$file = $_FILES['file'];
$name = $file['name'];
$error = $file['error'];  //当上传失败了 用error查看上传失败的原因
$tmp_name = $file['tmp_name']; //文件上传后在服务器端储存的临时文件夹  ,后面检测文件是否成功,上传成功以后,就把文件夹从临时文件夹中移到我们指定的目录中

switch ($error) {
	case '4':
		exit('请选择文件');  //exit() :直接退出php文件解析,代码执行到这里就不在继续往下执行了
		break;
	
	default:
		break;
}

//is_uploaded_file('1.txt') :检测1.txt是否是通过http的post方式上传的文件,是则返回true,不是则返回false

if(is_uploaded_file($tmp_name)){

	//检测文件是否上传成功,如果成功了就把文件从临时目录移到网站的指定的上传目录中

	if (move_uploaded_file($tmp_name,'upfiles/' . $name)) {
		echo "上传成功";
	}else{
		echo "上传失败";
	}
}else{
	echo "上传失败";
}


 ?>

 <!--

修改文件或目录的权限
	
	1. cd /  回车  跳转到系统的根目录中 
	2. cd Applications/  回车  跳转到应用程序目录
	3. cd XAMPP/  回车  跳转到xampp环境目录
	4. cd htdocs  回车跳转到网站根目录
	5. cd 6-25/  回车  这里的6-25是具体的程序文件夹
	6. chmod 777 upfiles/  回车  执行这个命令之前要先新建upfiles目录

相关的命令:
	ls  可以查看当前目录下的所有文件和文件夹




 -->