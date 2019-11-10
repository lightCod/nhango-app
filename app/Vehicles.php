<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    public function fuelRequests(){
        return $this->hasMany('App\FuelRequest');
    }
}
