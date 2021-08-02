<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Op_rating extends Model
{

    protected $fillable =[
    		
      'form_id',
	  'weighted_allocation',	
	  'final_rating',

    ];
}
