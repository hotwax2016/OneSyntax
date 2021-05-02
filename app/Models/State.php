<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\Country;

class State extends Model
{
    use HasFactory;

    protected $fillable = ['country', 'name'];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function get_country()
    {
        return $this->belongsTo(Country::class, 'country');
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
