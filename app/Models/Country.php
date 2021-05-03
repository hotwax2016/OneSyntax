<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['country_code', 'name'];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function states()
    {
        return $this->hasMany(State::class, 'country');
    }
}
