<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invoice_detail extends Model
{
    public function invoice()
    {
        $this->belongsTo('App\invoice');
    }
    public function medecines()
    {
        # code...
    }
}
