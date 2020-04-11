<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    public function supply_order()
    {
        $this->hasMany('App\supply_order');
    }
}
