<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medecine extends Model
{
    public $timestamps = false;
    public function type()
    {
        return $this->belongsTo('App\type');
    }
    public function stocks()
    {
        return $this->hasMany('App\stock');
    }
    public function supply_orders()
    {
        return $this->belongsToMany('App\supply_order')->using('App\supply_order_detail');
    }
    public function invoices()
    {
        return $this->belongsToMany('App\invoice')->using('App\invoice_detail');
    }
}
