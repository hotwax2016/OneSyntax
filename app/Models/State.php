<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\Country;

class State extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['country', 'name'];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

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
        return $this->hasMany(City::class, 'state');
    }
}
