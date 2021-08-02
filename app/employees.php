<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{


    protected $fillable = [
    	'id',
        'first_name',
        'middle_name',
        'last_name',
        'updated_at',
        'form',
        'deleted',
        'deleted_at'
    ];
}
