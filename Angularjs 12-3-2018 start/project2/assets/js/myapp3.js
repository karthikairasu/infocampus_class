var app=angular.module("Myapp",["ngRoute"]);
app.config(function($routeProvider){
	
	$routeProvider
	
	.when("/",{
		
		templateUrl:"views/home.html",
		
		controller:"myctrl1"
	})
	
	.when("/home",{
		
		templateUrl:"views/home.html",
		
		controller:"myctrl1"
	})
	
	
	.when("/addcustomer",{
		
		templateUrl:"views/addcustomer.html",
		controller:"myctrl2"
		
	})
	
	
	.when("/addproduct",{
		
		templateUrl:"views/addproduct.html",
		controller:"myctrl3"
		
		
	})
	
	
	.when("/addcity",{
		
		templateUrl:"views/addcity.html",
		controller:"myctrl4"
		
	})
	
	.when("/addstate",{
		
		templateUrl:"views/addstate.html",
		controller:"myctrl5"
		
		
	})
});
app.controller("myctrl1",function($scope){
	
	$scope.msg1="This is my home page";
	
});

app.controller("myctrl2",function($scope){
	
	$scope.msg2="This is my addcustomer page";
	
});

app.controller("myctrl3",function($scope){
	
	$scope.msg3="This is my addproduct page";
	$scope.pname="ponds";
});

app.controller("myctrl4",function($scope){
	
	$scope.msg4="This is my addcity page";
	
});

app.controller("myctrl5",function($scope){
	
	$scope.msg5="This is my addstate page";
	
});