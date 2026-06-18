<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'prefix',
        'plate',
        'model',
        'chassis',
        'type',
        'capacity',
        'year',
    // comodidades
        'has_internet', 
        'has_wc', 
        'has_plug', 
        'has_air_conditioner', 
        'has_fridge', 
        'has_heating', 
        'has_video'
    ];
}