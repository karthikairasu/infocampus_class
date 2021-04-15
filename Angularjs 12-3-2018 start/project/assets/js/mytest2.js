var app=angular.module("mytest",["ngRoute"]);
app.config(function($routeProvider){
	$routeProvider
	
	.when("/",{ 
	
	        templateUrl:"views/menclothing.html"
		
		
	})
	.when("/menclothing",{ 
	
	         templateUrl:"views/menclothing.html"
		
		
	})
	.when("/womenclothing",{ 
	
	         templateUrl:"views/womenclothing.html"
		
		
	})
	.when("/kidclothing",{ 
	
	           templateUrl:"views/kidclothing.html"
		
		
	})
	
});