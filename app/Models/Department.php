<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        'description',
        'creation_date'
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function incidents()
    {
        return $this->hasMany(Incident::class);
    }

    public function positions()
    {
        return $this->hasMany(Position::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}
