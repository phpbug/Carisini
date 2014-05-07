<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title></title>
	{{ HTML::style('css/bootstrap.css') }}
</head>
<body>
	
	<div class="row">
		<div style="border:1px solid black;">Banner Only<div>
	</div>

	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div>
				<input type="criteria" class="form-control" placeholder="Cari Sini La">
			</div>
		</div>
		<div class="col-md-4">@yield('content')</div>
	</div>
	
</body>
</html>