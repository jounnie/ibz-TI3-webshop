<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    public function offers()
    {
        return $this->hasMany('App\Offer');
    }
}
