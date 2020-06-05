<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    public function medecines()
    {
        return $this->hasMany('App\medecine');
    }
}
