<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    public function Users()
    {
        $this->hasMany('App\User');
    }
}
