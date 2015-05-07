<?php

class Tax extends Eloquent {
	
	// MASS ASSIGNMENT -------------------------------------------------------
	// define which attributes are mass assignable (for security)
	// we only want these 3 attributes able to be filled
	protected $fillable = array('title', 'percent');
	protected $table = 'tax';

	// DEFINE RELATIONSHIPS --------------------------------------------------
	public function shippingMethod() {
		return $this->belongsTo('ShippingMethod', 'shipping_method_id');
	}
	
	public function billingMethod() {
		return $this->belongsTo('BillingMethod', 'billing_method_id');
	}

	public function product() {
		return $this->hasMany('Product');
	}
	
}