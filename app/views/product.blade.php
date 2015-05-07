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
	@foreach ($product as $p)
		{{--var_dump($p);--}}
		<!-- GET OUR BASIC CATEGORIES INFORMATION -->
		<h4>Products</h4>
			<p>{{ $p->title }}</p>
			<p>{{ $p->description }}</p>
			<p>{{ $p->price }}</p>

		<!-- SHOW OFF THE PRODUCTS -->
		<h4>Categories</h4>
		@foreach ($p->category as $c)
			<p>{{ $c->title }}</p>
			<p>{{ $c->description }}</p>
			<p>{{ $c->language }}</p>
		
		@endforeach
		
	@endforeach

</div>
</body>
</html>
