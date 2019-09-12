<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataTwo extends Model
{
    protected $fillable =[
    	'year',
    	'date',
    	'change_in_opr',
    	'new_opr_level',
    ];
}
