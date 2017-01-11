//创建一个新的模块，模块名字叫filters，如果主页面要调用filters里面的unique过滤器方法就要子啊[]里面把这个模块“filters”写就去["filters"]
var cf = angular.module("filters", []);
//filter就是过滤器，过滤器的名字叫unique，
cf.filter("unique", function() {
	//这里data是一个数组$scop.products
	return function(data) {
		//angular里面固有的方法isArray，isUndefined
		if(angular.isArray(data)) {
			var categoryes = [];
			var obj = {};
			//方法有点类似查重
			for(var i = 0; i < data.length; i++) {
				var category = data[i].category;
				if(angular.isUndefined(obj[category])) {
					obj[category] = true;
					categoryes.push(category);
				}
			}
			return categoryes;
		} else {
			return [];
		}

	}

})