<?php

class ProductSpecification extends Eloquent {
	
	// MASS ASSIGNMENT -------------------------------------------------------
	// define which attributes are mass assignable (for security)
	// we only want these 5 attributes able to be filled
	protected $fillable = array('title', 'isuserinput', 'required');
	protected $table = 'product_specification';

	// DEFINE RELATIONSHIPS --------------------------------------------------
	public function products() {
		return $this->belongsTo('Product');
	}

}