<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
	

    protected $fillable = [
    		'form_id',
    		'output',
    		'succes_indicator',
    		'actual_accomplishments',
    		'tag'
    		
    ];
}
