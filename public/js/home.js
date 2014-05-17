angular.module('app',['ngRoute'])

/*.directive('display',function(){
	return {
		restrict: 'E', //A - attribute , E - Elements
		scope: {
			region: '@region',
			regionID: '@regionId',
		},
		template: '<div class="btn btn-success" ng-click="fncRegion()">{{region}}</div>',
		controller: function($scope){

			  $scope.fncRegion = function(){
			  	console.log($scope.regionID);
			  }
		}
	};
})*/

.directive('regionDisplay',function(){
	return {
		restrict: 'A', //A - attribute , E - Elements
		scope: {
			region: '@region',
			regionId: '@regionId',
		},
		template: '<span class="btn btn-warning" ng-click="showRegion()">{{ region }}</span>',
		controller: function($scope){

			  $scope.showRegion = function(){

		 			var n = '#region_'+$scope.regionId;
		 			var s = 'span'+n;

			 		if($('#region-list').find('span').hasClass('btn-success'))
			 		{
			 			$('#region-list').find('span').removeClass("btn-success");	
			 		}
			 		
			 		$('#region-list').find(s).addClass("btn-success");
			  }
		}
	};
})

.service('HomeService',function($http,$q){

	this.retrieveProvince = function(){

		var defer = $q.defer(); //current active object for asyn ajax call
		$http({
			method: 'GET',
			url: '/',
		})
		.success(function(data, status, headers, config) {
			defer.resolve(data);
		});

		return defer.promise;
	}


})

.config(function($routeProvider,$interpolateProvider)
{
  $interpolateProvider.startSymbol('{[');
  $interpolateProvider.endSymbol(']}');
  /*$routeProvider
  .when('/',{
  	controller: 'HomeCtrl',
  	templateUrl: '/templates/index.html'
  })
  .otherwise({ redirectTo: 'http://google.com' });*/

})



.controller('HomeCtrl',function($scope,$location,HomeService){
 

		

});


/*
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

