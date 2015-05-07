<?php

class ShippingtMethod extends Eloquent {
	
	// MASS ASSIGNMENT -------------------------------------------------------
	// define which attributes are mass assignable (for security)
	// we only want these 5 attributes able to be filled
	protected $fillable = array('title', 'description','price');
	protected $table = 'shipping_method';

	// DEFINE RELATIONSHIPS --------------------------------------------------
	public function order() {
		return $this->belongsTo('Order');
	}

}