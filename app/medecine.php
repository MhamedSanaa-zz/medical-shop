<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medecine extends Model
{
    public function type()
    {
        $this->belongsTo('App\type');
    }
    public function stocks()
    {
        $this->hasMany('App\stock');
    }
    public function supply_orders()
    {
        return $this->belongsToMany('App\supply_order')->using('App\supply_order_detail');
    }
}
