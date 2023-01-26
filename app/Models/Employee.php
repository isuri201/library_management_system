<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "Employee";
    
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'contact_no',
        'address',
        'dob',
        'nic',
        'email',
        'user_id'
    ];
}
