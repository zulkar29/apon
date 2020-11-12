<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = [
        'customer_name',
        'employee_name',
        'start_date',
        'end_date',
        'budget',
    ];
}
