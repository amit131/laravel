<?php

class ShippingAddress extends Eloquent {
	
	// MASS ASSIGNMENT -------------------------------------------------------
	// define which attributes are mass assignable (for security)
	// we only want these 5 attributes able to be filled
	protected $fillable = array('street', 'zipcode', 'city', 'country');
	protected $table = 'shipping_address';

	// DEFINE RELATIONSHIPS --------------------------------------------------
	//
	public function customer() {
		return $this->belongsTo('Customer','shipping_address');
	}

}