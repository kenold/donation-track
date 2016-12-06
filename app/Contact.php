<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

	protected $table = 'contacts';
	public $timestamps = true;

	protected $dates = ['deleted_at'];

	public function items()
	{
		return $this->belongsToMany('App\Item')
			->withPivot('date', 'item_qty')
			->orderBy('contact_item.date', 'desc')
			->withTimestamps();
	}

	public function scopeOrderByLast($query) {
		return $query->orderBy('lname', 'asc');
	}
}
