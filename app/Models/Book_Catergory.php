<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_Catergory extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'catergory'
    ];


}
