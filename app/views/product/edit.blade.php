<!-- app/views/product/edit.blade.php -->

<h1>Edit {{ $product->firstname.' '.$product->lastname }}</h1>
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}
{{ Form::model($product, array('url' => URL::to('product/'.$product->id), 'method' => 'PUT')) }}
{{-- Form::open(array('url' => URL::to('product/'.$product->id), 'method' => 'PUT')) --}}
<div class="form-group">
{{ Form::label('firstname', 'First Name') }}
{{ Form::text('firstname', null, array('class' => 'form-control')) }}
</div>
<div class="form-group">
{{ Form::label('lastname', 'Last Name') }}
{{ Form::text('lastname', Input::old('lastname'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
{{ Form::label('productname', 'productname') }}
{{ Form::text('productname', Input::old('productname'), array('class' => 'form-control')) }}
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
{{ Form::label('product_group', 'product Group') }}
{{ Form::select('product_group', $group_options, $product->group->lists('id','title'), array('class' => 'form-control')) }}
</div>
{{ Form::submit('Edit the product!', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}
