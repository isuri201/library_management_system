<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Books extends Model
{
    use HasFactory , SoftDeletes;
    protected $fillable = [
        'title',
        'author',
        'publication_date',
        'publisher',
        'ISBN_No',
        'image',
        'catergory_id'
        // 'created_by'
    ];
    public function Book_Catergory(){
        return $this->belongsTo(Book_Catergory::class,'catergory_id');
    }
}
