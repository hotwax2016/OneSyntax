<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\State;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['state', 'name'];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
