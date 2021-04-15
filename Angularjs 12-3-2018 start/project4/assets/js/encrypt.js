var app=angular.module("Resume",["ngRoute"]);
app.config(function($routeProvider){
	$routeProvider
	
	.when("/",{
		templateUrl:"views/home.html",
		controller:"myctrl"
	})
	.when("/home",{
		templateUrl:"views/home.html",
		controller:"myctrl"
	})
	.when("/feature",{
		templateUrl:"views/feature.html",
		controller:"myctrl2"
	})
	.when("/about",{
		templateUrl:"views/about.html",
		controller:"myctrl3"
	})
	.when("/contact",{
		templateUrl:"views/contact.html",
		controller:"myctrl4"
	})
	.when("/ourteam",{
		templateUrl:"views/ourteam.html",
		controller:"myctrl5"
	})
	.when("/signup",{
		templateUrl:"views/signup.html",
		controller:"myctrl6"
	})
	.when("/login",{
		templateUrl:"views/login.html",
		controller:"myctrl7"
	})
});	

app.controller("myctrl",function($scope){
	
});
app.controller("myctrl2",function($scope){
	
});
app.controller("myctrl3",function($scope){
	
});
app.controller("myctrl4",function($scope){
	
});
app.controller("myctrl5",function($scope){
	
});
app.controller("myctrl6",function($scope){
	
});
app.controller("myctrl7",function($scope){
	
});