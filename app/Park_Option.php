<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Park_Option extends Model
{
    protected $table="park_options";
    protected $fillable=[
        'name',
        'title',
        'price',
    ];
}
