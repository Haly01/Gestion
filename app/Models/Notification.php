<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "date",
        "hour",
        "employee_id",
        "department_id",
    ];

    public function employees()
    {
        return $this->belongsTo(Employee::class);
    }
    public function departments()
    {
        return $this->belongsTo(Department::class);
    }

}
