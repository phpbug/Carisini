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
		template: '<span class="btn btn-warning" id="{{ regionId }}" ng-click="showRegion()">{{ region }}</span>',
		controller: function($scope){

			  $scope.showRegion = function(){

		 			var full_region_id = '#province_'+$scope.regionId;
		 			var span_tag = 'input'+full_region_id;

					//For Region Button
		 			var _button = '#'+$scope.regionId;

		 			//Look for region highlighted then remove
		 			if($('#region-list').find('span').hasClass('active'))
			 		{
			 			$('#region-list').find('span').removeClass("active");	
			 		}	
		 			
		 			//Look for province highlighted then remove
			 		if($('#province-list').find('li').hasClass('btn-success'))
			 		{
			 			$('#province-list').find('li').removeClass("btn-success");	
			 		}

			 		//Inject into hidden field
			 		$("#region").val( $scope.regionId );
			 		//Inject into province hidden field
			 		
			 		$(_button).addClass('active');

			 		$('#province-list').find(span_tag).addClass("btn-success");

			 		//console.info( $('#province-list '+'#province_'+$scope.regionId) );

			 		$('#province-list '+'input:checkbox[id="province_'+$scope.regionId+'"]').each(function(){

			 			var _object = this;      //for li
			 			var _id   = "#"+this.id; //for checkbox
			 			$(this).prop('checked','checked');

			 		});

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

