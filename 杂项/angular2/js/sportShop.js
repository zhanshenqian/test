var app = angular.module("sportShop", ["filters","ngRoute"]);
//ng-view和config配合使用
app.config(function($routeProvider) {
		$routeProvider.when("/products", {templateUrl: "shop/template/products.html"});
		$routeProvider.when("/checkout", {templateUrl: "shop/template/checkout.html"
		});
		$routeProvider.otherwise({templateUrl: "shop/template/products.html"
		});

	})
	//只要写了控制器，js里面就要有对用的控制端，即使不进行操作也要写
app.controller("mainCtrl", function($scope, $http) {
		//在总得控制器下面的scope的result属性会被子代scope继承
		$scope.result =[];
//navbar中得商品总件数与总价
		$scope.totalCount = function() {
			$scope.totalPay = 0;
			var sum = 0;
			for(var i = 0; i < $scope.result.length;i++) {
				sum+=$scope.result[i].count;
				$scope.totalPay += $scope.result[i].count*$scope.result[i].price;
			}
			return sum;
		}

	})
	//自定义指令
app.directive("navBar", function() {
	return {
		templateUrl: "shop/template/navbar.html"
	}
})