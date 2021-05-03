<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\employee;

class Department extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name'];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
