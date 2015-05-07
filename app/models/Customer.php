<?php

class Customer extends Eloquent {
	
	// MASS ASSIGNMENT -------------------------------------------------------
	// define which attributes are mass assignable (for security)
	// we only want these 3 attributes able to be filled
	//protected $fillable = array('title', 'description', 'language');
	protected $table = 'customer';

	// DEFINE RELATIONSHIPS --------------------------------------------------
	public function billing_address() {
		return $this->hasOne('BillingAddress', 'billing_address');
	}
	
	public function shipping_address() {
		return $this->hasOne('ShippingAddress', 'shipping_address');
	}
	
	public function user() {
		return $this->hasOne('User');
	}
	
	public function order() {
		return $this->hasMany('Order');
	}	

}