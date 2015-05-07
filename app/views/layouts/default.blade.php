@if(Route::getCurrentRoute()->getParameter('admin'))
<!doctype html>
<html>
<head>
	@include('includes.head')
</head>
<body>
<div class="container">

	<header class="row">
    	@include('includes.menu')
		@include('includes.header')
	</header>

	<div id="main" class="row">
			{{ $content }}
	</div>

	<footer class="row">
		@include('includes.footer')
	</footer>

</div>
</body>
</html>
@else
<!doctype html>
<html>
<head>
	@include('includes.head')
</head>
<body>
<div class="container">

	<header class="row">
    	{{--@include('includes.menu')
		@include('includes.header')--}}
	</header>

	<div id="main" class="row">
			{{ $content }}
	</div>

	<footer class="row">
		@include('includes.footer')
	</footer>

</div>
</body>
</html>
@endif