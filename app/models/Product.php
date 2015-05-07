<?php

class Product extends Eloquent {
	
	// MASS ASSIGNMENT -------------------------------------------------------
	// define which attributes are mass assignable (for security)
	// we only want these 5 attributes able to be filled
	protected $fillable = array('title', 'description', 'price', 'language', 'specification');
	protected $table = 'products';

	// DEFINE RELATIONSHIPS --------------------------------------------------
	public function category() {
		return $this->belongsTo('Category');
	}
	
	public function image() {
		return $this->hasMany('Image');
	}
	
	public function tax() {
		return $this->belongsTo('Tax');
	}

	public function order() {
		return $this->belongsToMany('Order');
	}
	
	public function productVariation() {
		return $this->hasMany('ProductVariation');
	}

	public function productSpecification() {
		return $this->hasMany('ProductSpecification');
	}

}