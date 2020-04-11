<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    public function medecine()
    {
        $this->belongsTo('App\medecine');
    }
}
