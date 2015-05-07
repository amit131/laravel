<!-- app/views/product/show.blade.php -->

<h1>Showing {{ $product->firstname.' '.$product->lastname }}</h1>
<div class="jumbotron text-center">
<h2>{{ $product->firstname.' '.$product->lastname }}</h2>
<p>
<strong>Email:</strong> {{ $product->email }}<br>
<strong>productname:</strong> {{ $product->productname }}<br>
<strong>Group:</strong> {{ $product->group->lists('title')[0] }}
</p>
</div>
