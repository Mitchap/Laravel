<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class library extends Model
{
    public $table = 'table_books';
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'genre'
    ];
}
