 // model功能是定义一个新的模块
var  cf = angular.module("filters",[]);
cf.filter("unique",function(){
				return function(data){
					if (angular.isArray(data)) {
						var categoryes=[];
						var obj = {};//空对象，用途很大
						for (var i = 0;i<data.length;i++) {
							var category = data[i].category;
							if (angular.isUndefined(obj[category])) {
								obj[category] = true;
								categoryes.push(category);
							}
						}
						return categoryes;	
					}else{
						return [];
					}
				}
})