<!-- app/views/category/create.blade.php -->

<h1>Create a category</h1>
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}
{{ Form::open(array('url' => 'category')) }}
<div class="form-group">
{{ Form::label('title', 'Title') }}
{{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
{{ Form::label('description', 'Description') }}
{{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
{{ Form::label('category_parent', 'Parent Category') }}
{{ Form::select('category_parent', $category_options, Input::old('category_parent'), array('class' => 'form-control')) }}
</div>
{{ Form::submit('Create the category!', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}

