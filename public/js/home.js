
angular.module('directive.region',[])
.directive('regionData',function(){
	return {
		retrict: 'E',
		scope: {
			template: '=',
		},
		controller: function($scope) {
			 console.log( $scope.regionTemplateData );
		}
	}
});

angular
.module('app', [ 
		"ngRoute",
		"directive.region"
		])
	.controller('HomeController',function($scope,$location){
		$scope.hit = function(value){
			console.info(value)
		};
	});
	/*.config(function($routeProvider , $locationProvider){
		 $routeProvider
		 .when('/',{
		 		controller: ''
		 });
	});*/


