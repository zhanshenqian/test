//承接sportShop，要先把这个模块调过来
var app = angular.module("sportShop");
//控制器只要html中有写，js中就要写对应的代码（即使里面没内容），否则会报错
app.controller("checkoutCtrl",function ($scope) {
	//删除元素
	$scope.delete = function(product){
		for (var i=0;i<$scope.result.length;i++) {
			if ($scope.result[i].id==product.id) {
				//用数组方法删除
				$scope.result.splice(i,1);
				break;
			}
		}
	}
})
