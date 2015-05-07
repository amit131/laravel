<!-- app/views/user/create.blade.php -->

<h1>Create a user</h1>
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}
{{ Form::open(array('url' => 'user')) }}
<div class="form-group">
{{ Form::label('firstname', 'First Name') }}
{{ Form::text('firstname', Input::old('firstname'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
{{ Form::label('lastname', 'Last Name') }}
{{ Form::text('lastname', Input::old('lastname'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
{{ Form::label('username', 'Username') }}
{{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
{{ Form::label('email', 'Email') }}
{{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
{{ Form::label('password', 'Password') }}
{{ Form::password('password', array('class' => 'form-control')) }}
</div>
<div class="form-group">
{{ Form::label('user_group', 'User Group') }}
{{ Form::select('user_group', $group_options, Input::old('user_group'), array('class' => 'form-control')) }}
</div>
{{ Form::submit('Create the user!', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}
