<!-- app/views/group/edit.blade.php -->

<h1>Edit {{ $group->title }}</h1>
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}
{{ Form::model($group, array('url' => URL::to('group/'.$group->id), 'method' => 'PUT')) }}
<div class="form-group">
{{ Form::label('title', 'Title') }}
{{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
{{ Form::label('description', 'Description') }}
{{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
</div>
{{ Form::submit('Edit the group!', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}
</div>