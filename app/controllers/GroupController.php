<?php

class GroupController extends \BaseController {

protected $layout = 'layouts.default';
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	$this->layout->title = " Group";
		$group = array();
		// get all the groups
		$group = group::all();
		/*foreach($group as $key => $value){
			foreach($value->group as $v){
				$group[$key]['title'] = $v->title;
			}
		}*/
		// load the view and pass the groups
		$this->layout->content = View::make('group.index')
		->with(array('group' => $group));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	$this->layout->title = " Add Group";
		// queries the group db table, orders by title and lists title and id
	   // $group_options = DB::table('group')->orderBy('title', 'asc')->lists('title','id');

		// load the create form (app/views/group/create.blade.php)
		$this->layout->content = View::make('group.create'/*, array('group_options' => $group_options)*/);
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
	  'title' => 'required',
	  'description' => 'required'
	  );
	  $validator = Validator::make(Input::all(), $rules);
	  // process the validation
	  if ($validator->fails()) {
	  	return Redirect::to('group/create')
	  	->withErrors($validator);
	  } else {
	  // store
	  	$group = new group;
	  	$group->title	= Input::get('title');
	  	$group->description	= Input::get('description');
		$group->save();
	  	//$group->group()->withTimestamps()->attach(Input::get('group_group'));
	  	
	  // redirect
	  	Session::flash('message', 'Successfully created group!');
	  	return Redirect::to('group');
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
	$this->layout->title = " View Group";
		// get the group
		$group = group::find($id);
		// show the view and pass the group to it
		$this->layout->content = View::make('group.show')
		->with('group', $group);	
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
	$this->layout->title = " Edit Group";
		// queries the group db table, orders by title and lists title and id
	    //$group_options = DB::table('group')->orderBy('title', 'asc')->lists('title','id');
		// get the group
		$group = group::find($id);
		// show the edit form and pass the group
		$this->layout->content = View::make('group.edit')
		->with(array('group' => $group/*, 'group_options' => $group_options*/));
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
	  'title' => 'required',
	  'description' => 'required'
	  );
	  $validator = Validator::make(Input::all(), $rules);
	  // process the validation
	  if ($validator->fails()) {
	  	return Redirect::to('group/' . $id . '/edit')
	  	->withErrors($validator);
	  } else {
	  // store
	  	$group = group::find($id);
	  	$group->title	= Input::get('title');
	  	$group->description	= Input::get('description');
		$group->save();
	  	//$group->group()->withTimestamps()->attach(Input::get('group_group'));
	  // redirect
	  	Session::flash('message', 'Successfully updated group!');
	  	return Redirect::to('group');
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
		$group = group::find($id);
		$group->delete();
		// redirect
		Session::flash('message', 'Successfully deleted the group!');
		return Redirect::to('group');
	}


}
