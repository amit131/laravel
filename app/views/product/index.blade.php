<table class="table table-striped table-bordered">
<thead>
<tr>
<td>ID</td>
<td>Name</td>
<td>SKU</td>
<td>Description</td>
<td>Stock</td>
<td>Price</td>
<td>Category</td>
<td>Actions</td>
</tr>
</thead>
<tbody>
@if($product->count() > 0)
@foreach($product as $key => $value)
<tr>
<td>{{ $value->id }}</td>
<td>{{ $value->title }}</td>
<td>{{ $value->sku }}</td>
<td>{{ $value->description }}</td>
<td>{{ $value->stock }}</td>
<td>{{ $value->price }}</td>
<td>{{ $value->category->title }}</td>

{{--@foreach($value->group as $k => $v)
<!--<td>{{ $v->title }}</td>-->
@endforeach--}}
<!-- we will also add show, edit, and delete buttons -->
<td>
<!-- delete the product (uses the destroy method DESTROY /product/{id} -->
<!-- we will add this later since its a little more complicated than the first two buttons -->
{{ Form::open(array('url' => 'product/' . $value->id, 'class' => 'pull-right')) }}
{{ Form::hidden('_method', 'DELETE') }}
{{ Form::submit('Delete', array('class' => 'btn btn-warning', 'onClick'=>"return confirm('Are you sure to delete the product: ".$value->firstname."  ".$value->lastname."')")) }}
{{ Form::close() }}
<!-- show the product (uses the show method found at GET /product/{id} -->
<a class="btn btn-small btn-success" href="{{ URL::to('product/' . $value->id) }}">View</a>
<!-- edit this product (uses the edit method found at GET /product/{id}/edit -->
<a class="btn btn-small btn-info" href="{{ URL::to('product/' . $value->id . '/edit') }}">Edit</a>
</td>
</tr>
@endforeach
@else
<tr>
<td colspan="6" align="center">No records exist</td>
</tr>
@endif
</tbody>
</table>
