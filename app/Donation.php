<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model {

	protected $table = 'donations';
	public $timestamps = true;

	public function items()
	{
		return $this->hasMany('App\Item');
	}

	public function contact()
	{
		return $this->belongsTo('App\Contact');
	}

}
