<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'member';

    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'contact_no',
        'address',
        'dob',
        'email',
        'user_id'
       
    ];
    
    public function User(){
        return $this->belongsTo(User::class,'user_id');
    }
}
