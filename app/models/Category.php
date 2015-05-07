<?php

class Category extends Eloquent {
	
	// MASS ASSIGNMENT -------------------------------------------------------
	// define which attributes are mass assignable (for security)
	// we only want these 3 attributes able to be filled
	protected $fillable = array('title', 'description', 'language');
	protected $table = 'category';

	// DEFINE RELATIONSHIPS --------------------------------------------------
	// each category has many products
	public function product() {
		return $this->hasMany('Product');
	}

	// each bear BELONGS to a picnic
	/*public function picnics() {
		return $this->belongsToMany('Picnic', 'bears_picnics', 'bear_id', 'picnic_id');
	}*/

	public function subcategories() {
        return $this->hasMany('Category','parentid');
    }
}