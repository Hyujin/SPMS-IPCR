<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class printview extends Model
{
    protected $fillable = [
   'id',
   'first_name',
   'middle_name',
   "last_name",
   'division',
   'section',
   'reviewed',
   'approved',
   'start_date',
   'end_date',
   'created_at',
];

}
