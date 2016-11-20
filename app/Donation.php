<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    public function contact() {
        return $this->belongsTo('App\Contact');
    }
}
