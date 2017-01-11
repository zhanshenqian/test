// angular.module有2个作用。第一：创建一个新的模块；第二：获取一个已有模块；
// 如果只有一个参数，代表我要获取某一模块，前提是定义过这个模块
// 如果有2个参数，表示要创建一个新的模块，第二个参数是一个数组，里面是一个一个字符串，
// 每个字符串代表着一个已有模块的名称。表示新建的这个模块需要依赖这些模块；

var app=angular.module('sportShop');
app.controller('productsCtrl',function($scope,$http){
	$http({url:"php/getProducts.php",method:"GET"}).then(
		function (response) {
			console.log(response.data);
			$scope.products=response.data;
			$scope.categoryProducts = $scope.products;
			$scope.productsPerPage = function(pageNum,numPerPage){
				$scope.currentbtn = pageNum;
				var startIndex = (pageNum-1)*numPerPage;
				var endIndex = Math.min(pageNum*numPerPage,$scope.categoryProducts.length);
				var result = [];
				for (var i = startIndex; i < endIndex; i++) {
					result.push($scope.categoryProducts[i])
				}
				return $scope.pageProducts = result;
			}
			$scope.productsPerPage(1,3);
			$scope.findCategory = function(category){
				//用一个变量保存选中的分类的名称
				$scope.currentCategory = category;
				var result = [];
				if (category == "all") {
					result = $scope.products;
				}else{
					for (var i = 0; i < $scope.products.length; i++) {
						if($scope.products[i].category == category){
							result.push($scope.products[i]);
						}
					}
				}
				$scope.categoryProducts  = result;
				$scope.productsPerPage(1,3);
			}
			$scope.findCategory("all");
			$scope.classOfSelectedCategory = function(category){
				return $scope.currentCategory == category ? "btn-primary":"";
			}
			$scope.classOfSelectedbtn = function(category){
				return $scope.currentbtn == category ? "btn-primary":"";
			}

			$scope.pages = function(numPerPage){
				var count = $scope.categoryProducts.length;
				var pagesArray = [];
				var totalPage =Math.ceil(count/numPerPage);
				for (var i = 0; i < totalPage; i++) {
					pagesArray.push(i+1);
				}
				return pagesArray;
			}
			

			// $scope.makeCategoryes=function(){
			// 	var categoryes=[];
			// 	var obj = {};//空对象，用途很大
			// 	for (var i = 0;i<$scope.products.length;i++) {
			// 		var category = $scope.products[i].category;
			// 		if (angular.isUndefined(obj[category])) {
			// 			obj[category] = true;
			// 			categoryes.push(category);
			// 		}
			// 	}
			// 	$scope.categoryes = categoryes;
			// }
			// $scope.makeCategoryes();
			
			$scope.addToCart=function (product) {
				var hasThisProduct = false;//假定购物车里没有这个商品

				// body...
				for (var i = 0; i < $scope.result.length; i++) {
					if($scope.result[i].id ==product.id){
						$scope.result[i].count++;
						hasThisProduct = true;//经验证，有这个商品
						break;
					}
				}
				if(hasThisProduct == false){
					// console.log(1)
					$scope.result.push({id:product.id,name:product.name,price:product.price,count:1});
				}
				console.log($scope.result);
			}
		},function (response) {
			// body...
		})
})
