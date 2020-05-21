<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    public function supply_order()
    {
        return $this->hasMany('App\supply_order');
    }
}
