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

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function get_state()
    {
        return $this->belongsTo(State::class, 'state');
    }
}
