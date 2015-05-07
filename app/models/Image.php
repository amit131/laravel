<?php

class Image extends Eloquent {
	
	// MASS ASSIGNMENT -------------------------------------------------------
	// define which attributes are mass assignable (for security)
	// we only want these 5 attributes able to be filled
	protected $fillable = array('title', 'filename');
	protected $table = 'image';

	// DEFINE RELATIONSHIPS --------------------------------------------------
	public function products() {
		return $this->belongsTo('Product');
	}

}