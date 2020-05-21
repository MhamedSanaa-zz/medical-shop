<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    public $timestamps = false;
    public function Users()
    {
        return $this->hasMany('App\User');
    }
}
