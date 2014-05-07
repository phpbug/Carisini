@include('elements.header')
	
	<div class="row">
		<div>Banner Only<div>
	</div>

	<div style="height:150px;"></div>

	<div class="container" ng-app="homeApp">

		<!-- 1st Row -->
		<!-- <form class="form-inline" role="form"> -->
		
		{{ Form::open(array('url'=>'','method'=>'post','role'=>'form')) }}
		{{ Form::close() }}

		<div class="row" ng-controller="HomeController">
			
			<div class="col-md-6 col-md-offset-3">
					
				<!-- Display Everything Here -->
			    <input type="text" class="form-control focus" placeholder="Cari Sini la ~">

			  	<div class="help-block" style="text-align:center;">A block of help text that breaks onto a new line and may extend beyond one line.</div>

		  		<ul class="list-inline">
					  @foreach ($regions as $region)
						  <li style="padding-bottom:10px;">
						  	<button class="btn btn-warning" ng-model="region" ng-click="{{ 'region_'.$region['id'] }}=!{{ 'region_'.$region['id'] }}" >
						  		{{ $region['name'] }}
						  	</button>
						  </li>
					  @endforeach
					</ul>

					<ul class="list-inline pull-left">
					  @foreach ($provinces as $province)
						  
						  <li style="padding-bottom:10px;">
						  	

						  	<button ng-if={{ 'region_'.$province['region_id'] }} class="btn btn-success" ng-click="province({{ $province['id'] }})">{{ $province['name'] }}</button>
						  	<button ng-if=!{{ 'region_'.$province['region_id'] }} class="btn disabled">{{ $province['name'] }}</button>
						  	
						  </li>

					  @endforeach
					</ul>

				


			</div>

	</div>

{{ HTML::script('js/angular.js') }}
{{ HTML::script('js/route.js') }}
{{ HTML::script('js/home.js') }}

@include('elements.footer')