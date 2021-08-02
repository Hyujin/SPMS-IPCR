<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pdp extends Model
{
    protected $table = "pdp";
    protected $primaryKey = "employees_id";

    protected $fillable = [
    	'aim',
    	'objective',
    	'target_date',
    	'review_date',
    	'achieved_date',
    	'comment',
    	'task',
    	'outcome',
    	'next_steps'
    ];

    public function employees(){
        return $this->belongsTo('App/Employees', 'employees_id', 'employees_id');
    }

}
