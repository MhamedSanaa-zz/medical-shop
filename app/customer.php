<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $guarded = []; 
    public function invoices()
    {
        return $this->hasMany('App\invoice');
    }
}
