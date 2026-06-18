<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'name',
        'email',
        'birth_date',
        'license_number',
        'cpf',
        'pis',
        'cep',
        'street',
        'number',
        'city',
        'state',
        'photo'
    ];
}