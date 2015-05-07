<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Eloquent Categories</title>

	<!-- CSS -->
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<style>
		body { padding-top:50px; } /* add some padding to the top of our site */
	</style>
</head>
<body class="container">
<div class="col-sm-8 col-sm-offset-2">

	<!-- CATEGORIES -->
	<!-- loop over the categories and show off some things -->
	@foreach ($category as $cat)

		<!-- GET OUR BASIC CATEGORIES INFORMATION -->
		<h2>{{ $cat->title }}</h2>

		<!-- SHOW OFF THE PRODUCTS -->
		<h4>Products</h4>
		@foreach ($cat->product as $p) 
			<p>{{ $p->title }}</p>
			<p>{{ $p->description }}</p>
			<p>{{ $p->price }}</p>
		@endforeach
		
	@endforeach

</div>
</body>
</html>
