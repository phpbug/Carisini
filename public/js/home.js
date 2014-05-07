var homeApp = angular.module('homeApp',["ngRoute"]);


/*homeApp.config(function($routeProvider , $locationProvider){

	$routeProvider
	.when('/',{
		controller: 'HomeController',
	})

});*/


homeApp.controller('HomeController',function($scope,$location){

	$scope.hit = function(value){

		console.info(value)

	};

});