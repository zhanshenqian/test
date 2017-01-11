var app=angular.module("sportShop");
app.controller("checkoutCtrl",function ($scope) {
	// body...
	$scope.delete=function (product) {
		// body...
		for (var i = 0; i < $scope.result.length; i++) {
			if($scope.result[i].id==product.id){
				$scope.result.splice(i,1)
				break;
			}
		}
	}
})
