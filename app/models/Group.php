<?php

class Group extends Eloquent {
	
	// MASS ASSIGNMENT -------------------------------------------------------
	// define which attributes are mass assignable (for security)
	// we only want these 2 attributes able to be filled
	protected $fillable = array('title', 'description');
	protected $table = 'group';

	// DEFINE RELATIONSHIPS --------------------------------------------------
	// each group has many users
	public function user() {
		return $this->belongsToMany('User', 'user_group', 'group_id', 'user_id');
	}

	// each bear BELONGS to a picnic
	/*public function picnics() {
		return $this->belongsToMany('Picnic', 'bears_picnics', 'bear_id', 'picnic_id');
	}*/

}