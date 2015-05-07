<!-- app/views/group/create.blade.php -->

<h1>Create a group</h1>
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}
{{ Form::open(array('url' => 'group')) }}
<div class="form-group">
{{ Form::label('title', 'Title') }}
{{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
{{ Form::label('description', 'Description') }}
{{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
</div>
{{ Form::submit('Create the group!', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}
</div>
