<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class qualities extends Model
{
   
    public function Crush()
    {
        return $this->belongsTo('App\Crush');
    }
}
