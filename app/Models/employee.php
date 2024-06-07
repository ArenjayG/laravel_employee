<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    // If your table name is different from the default 'employees'
    protected $table = 'employees_tbl';

    // Specify which fields are mass assignable
    protected $fillable = [
        'first_name',
        'last_name',
        'DOB',
        'phone'
    ];
}