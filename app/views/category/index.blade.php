<h1>All the category</h1>
<table class="table table-striped table-bordered">
<thead>
<tr>
<td>ID</td>
<td>Title</td>
<td>Description</td>
<td>Actions</td>
</tr>
</thead>
<tbody>
@if($category->count() > 0)
@foreach($category as $key => $value)
<tr>
<td>{{ $value->id }}</td>
@if($value->parentid==0)
<td>{{ $value->title }}</td>
@elseif($value->parentid==1)
<td>&mdash; {{ $value->title }}</td>
@elseif($value->parentid==2)
<td>&mdash; &mdash; {{ $value->title }}</td>
@elseif($value->parentid==3)
<td>&mdash; &mdash; &mdash; {{ $value->title }}</td>
@endif
<td>{{ $value->description }}</td>
<!-- we will also add show, edit, and delete buttons -->
<td>
<!-- delete the category (uses the destroy method DESTROY /category/{id} -->
<!-- we will add this later since its a little more complicated than the first two buttons -->
{{ Form::open(array('url' => 'category/' . $value->id, 'class' => 'pull-right')) }}
{{ Form::hidden('_method', 'DELETE') }}
{{ Form::submit('Delete', array('class' => 'btn btn-warning', 'onClick'=>"return confirm('Are you sure to delete the category: ".$value->title."')")) }}
{{ Form::close() }}
<!-- show the category (uses the show method found at GET /category/{id} -->
<a class="btn btn-small btn-success" href="{{ URL::to('category/' . $value->id) }}">View</a>
<!-- edit this category (uses the edit method found at GET /group/{id}/edit -->
<a class="btn btn-small btn-info" href="{{ URL::to('category/' . $value->id . '/edit') }}">Edit</a>
</td>
</tr>
@endforeach
@else
<tr>
<td colspan="5" align="center">No records exist</td>
</tr>
@endif
</tbody>
</table>
