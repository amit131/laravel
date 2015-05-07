<!-- app/views/user/edit.blade.php -->

<h1>Edit {{ $user->firstname.' '.$user->lastname }}</h1>
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}
{{ Form::model($user, array('url' => URL::to('user/'.$user->id), 'method' => 'PUT')) }}
{{-- Form::open(array('url' => URL::to('user/'.$user->id), 'method' => 'PUT')) --}}
<div class="form-group">
{{ Form::label('firstname', 'First Name') }}
{{ Form::text('firstname', null, array('class' => 'form-control')) }}
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
{{ Form::select('user_group', $group_options, $user->group->lists('id','title'), array('class' => 'form-control')) }}
</div>
{{ Form::submit('Edit the user!', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}
