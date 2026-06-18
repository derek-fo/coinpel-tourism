<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = [
        'name', 
        'route',
        'date', 
        'time',
        'vehicle_id',
        'driver_id',
        'status',
        'rule',
    ];
}
