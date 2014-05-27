angular.module('app',['ngRoute'])

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
		 			var _input_button = 'input[id="'+$scope.regionId+'"]';

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

			 		$(_button).addClass('active'); //Primary Button Clicked

			 		//Reset State
			 		//-------------------------------------------------------
			 		if($("#region-list input[type='radio']").prop('checked'))
					{
						$("#region-list input[type='radio']").removeProp()
					}
					
					//-------------------------------------------------------

			 		$(_input_button).prop('checked','checked'); //Radio Button Checked

			 		$('#province-list').find(span_tag).prev().removeClass("btn-info");
			 		$('#province-list').find(span_tag).prev().addClass("btn-success");
			 		
			 		$('#province-list '+'input:checkbox[id="province_'+$scope.regionId+'"]').prop('checked',true);
			 		
			  }
		}
	};

});