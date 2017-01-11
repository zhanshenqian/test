var app=angular.module("sportShop");
//因为用到了$http方法，所以参数里里面要写$http
app.controller("productsCtrl",function ($scope,$http) {
	$http({url:"php/sportShop.php",mehtd:"GET"}).then(
		//回调函数，response.data是一个数组
		function (response) {
			$scope.products=response.data;
			//categoryProducts主要是用于选出与点击类相同的商品，不能用paroducts因为categoryProducts的值会根据点击不同而做出相应地改变
			$scope.categoryProducts = $scope.products;
			//根据需求填入要每页显示几条信息，第一个参数pageNum，主要是为了后面点击页码时能够显示相应地内容
			$scope.productsPerPage  = function (pageNum,numPerPage) {
				//当前点击的页码，此处只是为了判断点击的时哪个按钮，方便加classname
				$scope.currentbtn = pageNum;
				var startIndex = (pageNum-1)*numPerPage;
				var endIndex = Math.min(pageNum*numPerPage,$scope.categoryProducts.length);
				var result = [];
				for (var i =startIndex;i<endIndex;i++) {
					result.push($scope.categoryProducts[i])
				}
				return $scope.pageProducts = result;
			}
			$scope.productsPerPage(1,3)
			//此函数是为了点击左侧种类按钮时右侧内容做出相应地改变，
			//初始为all即全部种类
			$scope.findCategory = function (category) {
				$scope.currentCategory = category;
				var result = [];
				if (category == "all") {
					result =$scope.products;
				}else{
					for (var i =0;i<$scope.products.length;i++) {
						if ($scope.products[i].category ==category) {
							result.push($scope.products[i])
						}
					}
				}
				$scope.categoryProducts = result;
				$scope.productsPerPage(1,3)
			}
			$scope.findCategory("all");
			//选中选项时使其颜色变为选中的颜色
			$scope.classOfSelectbtn = function (btn) {
				return $scope.currentbtn == btn?"btn-primary":"";
			}
			$scope.classOfSelectCategory = function (category) {
				return $scope.currentCategory == category?"btn-primary":"";
			}
			//总页码与内容相对应
			$scope.pages = function (numPerPage) {
				var count = $scope.categoryProducts.length;
				var pagesArray=[];
				var totalPage = Math.ceil(count/numPerPage);
				for (var i =0;i<totalPage;i++) {
					pagesArray.push(i+1);
				}
				return pagesArray;
			}
			//navbar中的商品信息
			$scope.addToCart = function (product) {
				var hasThisProduct = false;
				//有的话++没有的话改为1，并且把信息填进去
				for (var i=0;i<$scope.result.length;i++) {
					if ($scope.result[i].id==product.id) {
						$scope.result[i].count++;
						hasThisProduct = true;
						break;
					}
				}
				if (hasThisProduct==false) {
					$scope.result.push({id:product.id,name:product.name,price:product.price,count:1})
				}
			}
		},function(response){
			
		}
	)
})
