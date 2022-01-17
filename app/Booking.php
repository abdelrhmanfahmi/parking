<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table="booking";
    protected $fillable=[
        'entry_date',
        'exit_date',
        'space',
        'extra_option',
        'total',
        'payment_method',
        'user_id'
    ];

    public function users(){
        return $this->belongsTo('App\User' , 'user_id');
    }
}
