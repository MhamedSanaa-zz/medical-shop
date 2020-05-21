<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    public $timestamps = false;
    public function medecines()
    {
        return $this->hasMany('App\medecine');
    }
}
