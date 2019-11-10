<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FuelRequest extends Model
{
    public function users(){
        return $this->belongsTo('App\User');
    }

    public function locations(){
        return $this->belongsTo('App\Location');
    }

    public function vehicles(){
        return$this->belongsTo('App\Vehicles');
    }
}
