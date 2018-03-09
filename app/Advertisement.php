<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    public function offers()
    {
        return $this->hasMany('App\Offer');
    }

    public function countOffers()
    {
        return $this->offers()->count();
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
