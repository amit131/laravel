<!-- app/views/category/edit.blade.php -->

<h1>Edit {{ $category->title }}</h1>
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}
{{ Form::model($category, array('url' => URL::to('category/'.$category->id), 'method' => 'PUT')) }}
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
{{ Form::select('category_parent', $category_options, $parent, array('class' => 'form-control')) }}
</div>
{{ Form::submit('Edit the category!', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}
