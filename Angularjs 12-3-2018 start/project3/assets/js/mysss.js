var app=angular.module("Resume",["ngRoute"]);
app.config(function($routeProvider){
	$routeProvider
	
	.when("/",{
		templateUrl:"views/myself.html"
	})
	.when("/myself",{
		templateUrl:"views/myself.html"
	})
	.when("/education",{
		templateUrl:"views/education.html"
	})
	.when("/project",{
		templateUrl:"views/project.html"
	})
	.when("/skills",{
		templateUrl:"views/skills.html"
	})
	.when("/achievement",{
		templateUrl:"views/achievement.html"
	})
	.when("/hobby",{
		templateUrl:"views/hobby.html"
	})
	.when("/personalinformation",{
		templateUrl:"views/personalinformation.html"
	})
	
});	