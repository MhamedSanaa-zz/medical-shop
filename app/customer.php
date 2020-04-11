<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    public function invoices()
    {
        $this->hasMany('App\invoice');
    }
}
