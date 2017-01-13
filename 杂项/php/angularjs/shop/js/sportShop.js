var app = angular.module('sportShop', ["filters","ngRoute"]);
// var app = angular.module('sportShop', []);
app.config(function($routeProvider) {
	$routeProvider.when("/products",{templateUrl:"template/products.html"})
	$routeProvider.when("/checkout",{templateUrl:"template/checkout.html"})
	$routeProvider.otherwise({templateUrl:"template/products.html"})
})
app.controller('mainCtrl', function($scope,$http) {
	$scope.result = [];

	$scope.totalCount=function (argument) {
		$scope.totalPay = 0;
		// body...
		var sum =0;
		for (var i = 0; i < $scope.result.length; i++) {
			sum += $scope.result[i].count;
			$scope.totalPay += $scope.result[i].count*$scope.result[i].price;
		}
		return sum;
	}
})
app.directive("navBar",function(){
	return {
	templateUrl:"template/navbar.html"
	}
})