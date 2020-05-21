<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    public function medecine()
    {
        return $this->belongsTo('App\medecine');
    }
}
