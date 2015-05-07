<!-- app/views/product/create.blade.php -->
<style>
/*  bhoechie tab */


</style>
<script>
/*$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});*/
</script>
<h1>Add new product</h1>
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}
{{ Form::open(array('url' => 'product')) }}
<div class="form-group">
{{ Form::label('pname', 'Product Name') }}
{{ Form::text('pname', Input::old('pname'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
{{ Form::label('pdesc', 'Product Description') }}
{{ Form::textarea('pdesc', Input::old('pdesc'), array('class' => 'form-control')) }}
</div>
<!--<div class="form-group">-->
<div class="container"></div>
<div class="row">
<div class="col-md-6">
<div style="width:100%; height350px; float:left">
<div style="margin:0 10px; float:left">{{ Form::label('pdata', 'Product Data') }}</div>
<div style="float:left">{{ Form::select('product_type', array('Product Type'=>array('simple'=>'Simple product','grouped'=>'Grouped product','external'=>'External/Affiliate product','variable'=>'Variable product')), Input::old('category_parent'), array('class' => 'form-control')) }}</div>
<div style="margin:0 10px; float:left">{{ Form::label('virtual', 'Virtual') }}
{{Form::checkbox('virtual', 'virtual')}}
{{ Form::label('downloadable', 'Downloadable') }}
{{Form::checkbox('downloadable', 'downloadable')}}</div>
</div>
<div style="width:100%; height:400px">
	<!-- tabs left -->
      <div class="tabbable tabs-left">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#general" data-toggle="tab"><div class="general"> General</div></a></li>
          <li><a href="#inventory" data-toggle="tab"><div class="inventory"> Inventory</div></a></li>
          <li><a href="#shipping" data-toggle="tab"><div class="shipping"> Shipping</div></a></li>
          <li><a href="#linked-products" data-toggle="tab"><div class="linked-products"> Linked Products</div></a></li>
          <li><a href="#attributes" data-toggle="tab"><div class="attributes"> Attributes</div></a></li>
          <li><a href="#advanced" data-toggle="tab"><div class="advanced"> Advanced</div></a></li>
        </ul>
        <div class="tab-content">
         <div class="tab-pane active" id="general">
         	<div style="float:left">
			{{ Form::label('sku', 'SKU') }}
			{{ Form::text('sku', Input::old('sku'), array('class' => 'form-control')) }}
			{{ Form::label('regular_price', 'Regular Price') }}
			{{ Form::text('regular_price', Input::old('regular_price'), array('class' => 'form-control')) }}
			{{ Form::label('sale_price', 'Sale Price') }}
			{{ Form::text('sale_price', Input::old('sale_price'), array('class' => 'form-control')) }}
          	</div> 
         </div>
         <div class="tab-pane" id="inventory">
			<div style="float:left">
			{{ Form::label('manage_stock', 'Manage Stock?') }}
			{{ Form::checkbox('manage_stock', null, array('class' => 'form-control')) }}<span> Enable stock management at product level (not needed if managing stock at variation level)</span>
			{{ Form::label('stock_status', 'Stock status') }}
			{{ Form::select('stock_status', array('in'=>'In Stock','out'=>'Out of Stock'), Input::old('stock_status'), array('class' => 'form-control')) }}
			{{ Form::label('allow_backorders', 'Allow Backorders?') }}
			{{ Form::select('allow_backorders', array('dont_allow'=>'Do not allow','allow_notify_user'=>'Allow, but notify user','allow'=>'Allow'),Input::old('allow_backorders'), array('class' => 'form-control')) }}
            {{ Form::label('sold_individually', 'Sold Individually') }}
			{{ Form::checkbox('sold_individually', null, array('class' => 'form-control')) }}<span> Enable this to only allow one of this item to be bought in a single order</span>
          	</div>         
         </div>
         <div class="tab-pane" id="shipping">
         	<div style="float:left">
			{{ Form::label('sku', 'SKU') }}
			{{ Form::text('sku', Input::old('sku'), array('class' => 'form-control')) }}
			{{ Form::label('regular_price', 'Regular Price') }}
			{{ Form::text('regular_price', Input::old('regular_price'), array('class' => 'form-control')) }}
			{{ Form::label('sale_price', 'Sale Price') }}
			{{ Form::text('sale_price', Input::old('sale_price'), array('class' => 'form-control')) }}
          	</div>
         </div>
         <div class="tab-pane" id="linked-products">
         	<div style="float:left">
			{{ Form::label('sku', 'SKU') }}
			{{ Form::text('sku', Input::old('sku'), array('class' => 'form-control')) }}
			{{ Form::label('regular_price', 'Regular Price') }}
			{{ Form::text('regular_price', Input::old('regular_price'), array('class' => 'form-control')) }}
			{{ Form::label('sale_price', 'Sale Price') }}
			{{ Form::text('sale_price', Input::old('sale_price'), array('class' => 'form-control')) }}
          	</div>
         </div>
         <div class="tab-pane" id="attributes">
         	<div style="float:left">
			{{ Form::label('sku', 'SKU') }}
			{{ Form::text('sku', Input::old('sku'), array('class' => 'form-control')) }}
			{{ Form::label('regular_price', 'Regular Price') }}
			{{ Form::text('regular_price', Input::old('regular_price'), array('class' => 'form-control')) }}
			{{ Form::label('sale_price', 'Sale Price') }}
			{{ Form::text('sale_price', Input::old('sale_price'), array('class' => 'form-control')) }}
          	</div>
         </div>
         <div class="tab-pane" id="advanced">
         	<div style="float:left">
			{{ Form::label('sku', 'SKU') }}
			{{ Form::text('sku', Input::old('sku'), array('class' => 'form-control')) }}
			{{ Form::label('regular_price', 'Regular Price') }}
			{{ Form::text('regular_price', Input::old('regular_price'), array('class' => 'form-control')) }}
			{{ Form::label('sale_price', 'Sale Price') }}
			{{ Form::text('sale_price', Input::old('sale_price'), array('class' => 'form-control')) }}
          	</div>
         </div>
        </div>
      </div>
      <!-- /tabs -->
     </div> 
</div>
</div>      
{{ Form::submit('Create the product!', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}
