<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Hotel;

class Cliente extends Model
{
    public function hotels()
        {
            return $this->belongsTo('App\Hotel');
        }
}
