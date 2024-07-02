<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'description',
      'date',
      'hour',
      'department_id',
      'employee_id',
    ];

    public function departments()
    {
        return $this->belongsTo(Department::class);
    }
    public function employees()
    {
        return $this->belongsTo(Employee::class);
    }
}
