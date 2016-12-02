<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

	protected $table = 'contacts';
	public $timestamps = true;

	protected $dates = ['deleted_at'];

	public function items()
	{
		return $this->belongsToMany('App\Item')->withTimestamps();
	}
}
