<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function donations() {
        return $this->hasMany('App\Donation');
    }
}
