<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model {

	protected $table = 'items';
	public $timestamps = true;

	public function category()
	{
		return $this->belongsTo('App\Category');
	}

	public function donation()
	{
		return $this->belongsTo('App\Donation');
	}

}
