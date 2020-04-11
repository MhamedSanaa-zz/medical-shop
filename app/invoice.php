<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    public function customer()
    {
        $this->belongsTo('App\customer');
    }
    public function invoice_details()
    {
        $this->hasMany('App\invoice_detail');
    }
}
