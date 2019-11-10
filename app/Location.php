<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function fuelRequests(){
        return $this->hasMany('App\FuelRequest');
    }
}
