<?php

class Order extends Eloquent {
	
	// MASS ASSIGNMENT -------------------------------------------------------
	// define which attributes are mass assignable (for security)
	// we only want these 5 attributes able to be filled
	protected $fillable = array('orderingdate', 'orderingdone', 'orderingconfirmed', 'comment');
	protected $table = 'order';

	// DEFINE RELATIONSHIPS --------------------------------------------------
	public function products() {
		return $this->belongsToMany('Product');
	}
	
	public function customer() {
		return $this->hasOne('Customer');
	}

	public function payment_method() {
		return $this->hasOne('PaymentMethod');
	}

	public function shipping_method() {
		return $this->hasOne('ShippingMethod');
	}
}