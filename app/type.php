<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    public function medecines()
    {
        $this->hasMany('App\medecine');
    }
}
