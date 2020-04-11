<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supply_order extends Model
{
    public function supplier()
    {
        $this->belongsTo('App\supplier');
    }
    public function medecines()
    {
        return $this->belongsToMany('App\medecine')->using('App\supply_order_detail');
    }
}
