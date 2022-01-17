<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table="vehicles";
    protected $fillable=[
        'name',
        'image',
        'car_number',
        'price',
        'space_availability',
        'parking_space'
    ];
}
