<?php

class ProductVariation extends Eloquent {
	
	// MASS ASSIGNMENT -------------------------------------------------------
	// define which attributes are mass assignable (for security)
	// we only want these 5 attributes able to be filled
	protected $fillable = array('position', 'title', 'priceadjustion');
	protected $table = 'product_variation';

	// DEFINE RELATIONSHIPS --------------------------------------------------
	public function products() {
		return $this->belongsTo('Product');
	}

}