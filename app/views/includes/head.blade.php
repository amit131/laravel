<title>
@if(Route::getCurrentRoute()->getParameter('admin'))
MyShop Administration :: {{ $title }}
@else
MyShop :: {{ $title }}
@endif
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<!--<link rel="stylesheet" href="{{ URL::asset('shop-homepage.css') }}">-->
{{ HTML::style('shop-homepage.css') }}
<link rel="stylesheet" href="{{ URL::asset('css/font.css') }}">
{{-- HTML::style('css/fonts/font.css') --}}