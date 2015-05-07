
<h1>All the group</h1>
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
@if($group->count() > 0)
@foreach($group as $key => $value)
<tr>
<td>{{ $value->id }}</td>
<td>{{ $value->title }}</td>
<td>{{ $value->description }}</td>
<!-- we will also add show, edit, and delete buttons -->
<td>
<!-- delete the group (uses the destroy method DESTROY /group/{id} -->
<!-- we will add this later since its a little more complicated than the first two buttons -->
{{ Form::open(array('url' => 'group/' . $value->id, 'class' => 'pull-right')) }}
{{ Form::hidden('_method', 'DELETE') }}
{{ Form::submit('Delete', array('class' => 'btn btn-warning', 'onClick'=>"return confirm('Are you sure to delete the group: ".$value->title."')")) }}
{{ Form::close() }}
<!-- show the group (uses the show method found at GET /group/{id} -->
<a class="btn btn-small btn-success" href="{{ URL::to('group/' . $value->id) }}">View</a>
<!-- edit this group (uses the edit method found at GET /group/{id}/edit -->
<a class="btn btn-small btn-info" href="{{ URL::to('group/' . $value->id . '/edit') }}">Edit</a>
</td>
</tr>
@endforeach
@else
<tr>
<td colspan="4" align="center">No records exist</td>
</tr>
@endif
</tbody>
</table>
