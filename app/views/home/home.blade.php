@include('elements.header')
  	
	@include('elements.banners.top')
	
	<div style="height:150px;"></div>

	<div ng-app="app">

		<div class="row">
			<div class="col-md-6 col-md-offset-3">

				{{ Form::open(array('route'=>'show','method'=>'get','role'=>'form')) }} 
			    
			    <input type="text" name="criteria" class="form-control focus" placeholder="Cari Sini la ~">
			    
			    {{ Form::close() }}
			  	
			  	<div class="help-block" style="text-align:center;">A block of help text that breaks onto a new line and may extend beyond one line.</div>
		  			<ul class="list-inline">
		  				<span style="display:none;" ng-model="flag"></span>

		  				@foreach($regions as $key => $region)
		  				
		  				  <li style="padding-bottom:10px;" region-display region="{{ $region['name'] }}" region-id="{{ $region['id'] }}"></li>
						
						@endforeach
						
						<div class="clearfix">&nbsp;</div>	
							<span id="region-list">	

								@foreach($provinces as $key => $province)
				  				
				  				  <!-- <li style="padding-bottom:10px;" province-display province="{{ $province['name'] }}" region-id="{{ $province['region_id'] }}"></li> -->
				  				  <span id="region_{{ $province['region_id'] }}" class="btn" disabled="disabled">{{ $province['name'] }}</span>
								
								@endforeach

							</span
					</ul>
			</div>

		</div>

{{ HTML::script('js/jquery.js') }}
{{ HTML::script('js/angular.js') }}
{{ HTML::script('js/route.js') }}
{{ HTML::script('js/home.js') }}

@include('elements.footer')