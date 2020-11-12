<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $table = 'salarys';
    protected $fillable = [
        'id',
        'user_id',
        'name',
        'salary_start_date',
        'salary_end_date',
        'basic_salary',
        'bonus',
        'work_day',
        'total_working_day',
        'final_salary',
        'salary_generate_date'

    ];


}
