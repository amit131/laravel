<!--<!DOCTYPE html>
<html>
<head>
<title>Look! I'm CRUDding</title>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<nav class="navbar navbar-inverse">
<div class="navbar-header">
<a class="navbar-brand" href="{{ URL::to('user') }}">user Alert</a>
</div>
<ul class="nav navbar-nav">
<li><a href="{{ URL::to('user') }}">View All user</a></li>
<li><a href="{{ URL::to('user/create') }}">Create a user</a>
</ul>
</nav>
<h1>All the user</h1>
<!-- will be used to show any messages -->
{{--@if (Session::has('message'))--}}
<!--<div class="alert alert-info">{{ Session::get('message') }}</div>-->
{{--@endif--}}
<table class="table table-striped table-bordered">
<thead>
<tr>
<td>ID</td>
<td>Name</td>
<td>Email</td>
<td>Username</td>
<td>User Role</td>
<td>Actions</td>
</tr>
</thead>
<tbody>
@if($user->count() > 0)
@foreach($user as $key => $value)
<tr>
<td>{{ $value->id }}</td>
<td>{{ $value->firstname.' '.$value->lastname }}</td>
<td>{{ $value->email }}</td>
<td>{{ $value->username }}</td>
<td>{{ $value->title }}</td>

{{--@foreach($value->group as $k => $v)
<!--<td>{{ $v->title }}</td>-->
@endforeach--}}
<!-- we will also add show, edit, and delete buttons -->
<td>
<!-- delete the user (uses the destroy method DESTROY /user/{id} -->
<!-- we will add this later since its a little more complicated than the first two buttons -->
{{ Form::open(array('url' => 'user/' . $value->id, 'class' => 'pull-right')) }}
{{ Form::hidden('_method', 'DELETE') }}
{{ Form::submit('Delete', array('class' => 'btn btn-warning', 'onClick'=>"return confirm('Are you sure to delete the user: ".$value->firstname."  ".$value->lastname."')")) }}
{{ Form::close() }}
<!-- show the user (uses the show method found at GET /user/{id} -->
<a class="btn btn-small btn-success" href="{{ URL::to('user/' . $value->id) }}">View</a>
<!-- edit this user (uses the edit method found at GET /user/{id}/edit -->
<a class="btn btn-small btn-info" href="{{ URL::to('user/' . $value->id . '/edit') }}">Edit</a>
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
<!--</div>
</body>
</html>-->