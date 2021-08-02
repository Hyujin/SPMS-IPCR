<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
	

    protected $fillable = [
    		'form_id',
    		'employee_id',
    		'final_average_rating',
    		'adjectival_rating',
    		'comments'
    ];
}
