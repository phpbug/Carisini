@include('elements.header')
  	
	@include('elements.banners.top')
	
	<div style="height:150px;"></div>

	<div ng-app="app">

		<div class="row">
			<div class="col-md-6 col-md-offset-3">

				{{ Form::open(array('route'=>'show','method'=>'get','role'=>'form')) }} 
			    
			    <input type="text" name="criteria" class="form-control focus" placeholder="Cari Sini la ~">
			    
			  	<div class="help-block" style="text-align:center;">A block of help text that breaks onto a new line and may extend beyond one line.</div>
		  				
			  		<ul class="list-inline" id="region-list">
		  				@foreach($regions as $key => $region)
		  				  <li style="padding-bottom:10px;" region-display region="{{ $region['name'] }}" region-id="{{ $region['id'] }}"></li>
		  				  <input type="checkbox" name="region" value="{{ $region['id'] }}" style="display:none;" />
							@endforeach
						</li>
						
						<ul class="list-inline" id="province-list">
							@foreach($provinces as $key => $province)
			  				  <!-- <li id="region_{{ $province['region_id'] }}" class="btn" disabled="disabled">{{ $province['name'] }}</li> -->
			  				  <li class="btn" disabled="disabled">{{ $province['name'] }}</li>
			  				  <input type="checkbox" name="province[]" value="{{ $province['id'] }}" id="province_{{ $province['region_id'] }}" />
							@endforeach
						</ul>

						{{ Form::close() }}
			</div>

		</div>

{{ HTML::script('js/jquery.js') }}
{{ HTML::script('js/angular.js') }}
{{ HTML::script('js/route.js') }}
{{ HTML::script('js/home.js') }}

@include('elements.footer')