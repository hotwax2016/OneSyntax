<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'lastname',
        'firstname',
        'middlename',
        'address',
        'department_id',
        'city_id',
        'state_id',
        'country_id',
        'zip',
        'birthdate',
        'date_hired',
    ];
}
