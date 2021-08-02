<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class preforms extends Model
{
       protected $fillable = [
    	'id',
        'first_name',
        'middle_name',
        'last_name',
        'division',
        'section',
        'reviewed',
        'start_date',
        'end_date',
        'form',
        'status'
    ];
}
