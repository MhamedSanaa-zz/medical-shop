<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $guarded = []; 
    public function supply_orders()
    {
        return $this->hasMany('App\supply_order');
    }
}
