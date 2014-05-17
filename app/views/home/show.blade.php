@include('elements.header')
@include('elements.banners.top')

<div class="row" style="border:1px solid black;">

	<div class="col-md-4">
		left
	</div>
	<div class="col-md-4">
	
			<!-- Important -->		
			<ul class="list-inline">
				<li class="pull-left" style="width:200px;">
					{{ HTML::image('img/0114426756.jpg', 'title here la tiu', array('class' => 'img-thumbnail')) }}
				</li>
				<li>
					Today 1.30pm
					<br />
					<?php echo link_to_route('display', "950sqm. RESIDENTIAL LOT ALAMINOS CITY PANGASINAN", $parameters = array(), $attributes = array()); ?>
					<br />
					₱ 2,850,000
					<br />
					Land / Agriculture Pangasinan , Real estate agent
				</li>
				<li class="clearfix">&nbsp;</li>
			</ul>

			<div class="clearfix" style="height:70px;">&nbsp;</div>

			<!-- end of Important -->

			<ul class="list-inline">
				<li class="pull-left" style="width:200px;">
					{{ HTML::image('img/0114426756.jpg', 'title here la tiu', array('class' => 'img-thumbnail')) }}
				</li>
				<li>
					Today 1.30pm
					<br />
					<?php echo link_to_route('display', "950sqm. RESIDENTIAL LOT ALAMINOS CITY PANGASINAN", $parameters = array(), $attributes = array()); ?>
					<br />
					₱ 2,850,000
					<br />
					Land / Agriculture Pangasinan , Real estate agent
				</li>
				<li class="clearfox">&nbsp;</li>
			</ul>


     
	</div>
	<div class="col-md-4">
		right
	</div>
			
</div>

@include('elements.footer')