<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $guarded = []; 
    public $timestamps = false;
    public function Users()
    {
        return $this->hasMany('App\User');
    }
}
