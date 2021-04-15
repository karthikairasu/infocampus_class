var app=angular.module("Blog",["ngRoute"]);
app.config(function($routeProvider){
	$routeProvider
	.when("/",{
		
		templateUrl:"views/home.html",
		controller:"myctrl2"
		
	})
	
	.when("/home",{
		
		templateUrl:"views/home.html",
		controller:"myctrl2"
	})
	
	.when("/pages",{
		
		templateUrl:"views/pages.html",
		controller:"myctrl3"
	})
	
	.when("/events",{
		
		templateUrl:"views/events.html",
		controller:"myctrl4"
	})
	
	.when("/media",{
		
		templateUrl:"views/media.html",
		controller:"myctrl5"
		
	})
	
});
app.controller("myctrl2",function($scope){
	
	$scope.msg2="This is Home page";
});

app.controller("myctrl3",function($scope){
	
	$scope.msg3="This is my  page";
	
});

app.controller("myctrl4",function($scope){
	
	$scope.msg4="This is my events";
	
});

app.controller("myctrl5",function($scope){
	
	$scope.msg5="This is my  media";
	
});
