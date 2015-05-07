<?php

class CategoryController extends \BaseController {

protected $layout = 'layouts.default';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	$this->layout->title = " Category";
		//
		$category = Category::all();
		// queries the category db table, orders by title
	    $category_options = DB::table('category')->where('parentid', 0)->orderBy('title', 'asc')->get();
		
		$this->layout->content = View::make('category.index', array('category' => $category, 'category_options' => $category_options));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	$category = Category::all();
	$category_options = array();
		foreach($category as $key => $value){
			if($value->parentid==0){
				$category_options[$value->id] = $value->title;
			}else if($value->parentid==1){
				$category_options[$value->id] = '&nbsp;&nbsp;&nbsp;'. $value->title;
			}else if($value->parentid==2){
				$category_options[$value->id] = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $value->title;
			}else if($value->parentid==3){
				$category_options[$value->id] = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $value->title;
			}
		}
		//
		$this->layout->title = " Add Category";
		// queries the category db table, orders by title and lists title and id
	    //$category_options = DB::table('category')->where('parentid', 0)->orderBy('title', 'asc')->lists('title','id');
		
		// load the create form (app/views/group/create.blade.php)
		$this->layout->content = View::make('category.create', array('category_options' => $category_options));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	  // validate
	  // read more on validation at http://laravel.com/docs/validation
	  $rules = array(
	  'category_parent' => 'required',
	  'title' => 'required',
	  //'description' => 'required'
	  );
	  $validator = Validator::make(Input::all(), $rules);
	  // process the validation
	  if ($validator->fails()) {
	  	return Redirect::to('category/create')
	  	->withErrors($validator);
	  } else {
	  // store
	  	$category = new category;
	  	$category->title	= Input::get('title');
	  	$category->description	= Input::get('description');
	  	$category->parentid	= Input::get('category_parent');
		$category->save();
	  	//$group->group()->withTimestamps()->attach(Input::get('group_group'));
	  	
	  // redirect
	  	Session::flash('message', 'Successfully created category!');
	  	return Redirect::to('category');
	  }	
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$this->layout->title = " View Category";
		// get the category
		$category = category::find($id);
		// show the view and pass the category to it
		$this->layout->content = View::make('category.show')
		->with('category', $category);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
	$category = Category::all();
	$category_options = array();
		foreach($category as $key => $value){
			if($value->parentid==0){
				$category_options[$value->id] = $value->title;
			}else if($value->parentid==1){
				$category_options[$value->id] = '&nbsp;&nbsp;&nbsp;'. $value->title;
			}else if($value->parentid==2){
				$category_options[$value->id] = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $value->title;
			}else if($value->parentid==3){
				$category_options[$value->id] = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $value->title;
			}
		}
		$pid = DB::table('category')->select('parentid')->where('id',$id)->get();
		$parentid = DB::table('category')->select('id')->where('id',$pid[0]->parentid)->get();
		
		$this->layout->title = " Edit Category";
		// queries the group db table, orders by title and lists title and id
	    //$category_options = DB::table('category')->orderBy('title', 'asc')->lists('title','id');
		// get the category
		$category = category::find($id);
		// show the edit form and pass the category
		$this->layout->content = View::make('category.edit')
		->with(array('category' => $category, 'category_options' => $category_options, 'parent' => $parentid[0]->id));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
	 // validate
	 // read more on validation at http://laravel.com/docs/validation
	 $rules = array(
	  'category_parent' => 'required',
	  'title' => 'required',
	  //'description' => 'required'
	  );
	  $validator = Validator::make(Input::all(), $rules);
	  // process the validation
	  if ($validator->fails()) {
	  	return Redirect::to('category/' . $id . '/edit')
	  	->withErrors($validator);
	  } else {
	  // store
	  	$category = category::find($id);
	  	$category->title	= Input::get('title');
	  	$category->description	= Input::get('description');
		$category->parentid	= Input::get('category_parent');
		$category->save();
	  	//$category->category()->withTimestamps()->attach(Input::get('category_group'));
	  // redirect
	  	Session::flash('message', 'Successfully updated category!');
	  	return Redirect::to('category');
	  }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
		$category = category::find($id);
		$category->delete();
		// redirect
		Session::flash('message', 'Successfully deleted the category!');
		return Redirect::to('category');
	}

	/*public function category_tree($parentid)
	{
		$cat_list = Category::find();
		foreach($cat_list as $list){
		$i = 0;
		if ($i == 0) $out = '<ul>';
			$out .= '<li>' . $list->title;
			$this->category_tree($list->parentid);
			$out .= '</li>';
			$i++;
		if ($i > 0) $out .= '</ul>';
		}
	return $out;
	}*/
	
	public function category_tree(){
		return Category::with('subcategories')->get();
	}

	}
