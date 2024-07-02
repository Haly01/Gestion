<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "last_name",
        "age",
        "gender",
        "email",
        "phone",
        "salary",
        'address',
        'identification_card',
        'department_id'
    ];

    public function departments()
    {
        return $this->belongsTo(Department::class);
    }

    public function incidents()
    {
        return $this->hasMany(Incident::class);
    }
}
