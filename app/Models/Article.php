<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'title',
        'paragraph',
        'subtitle',
        'paragraph2',
        'subtitle2',
        'img',
        'img2',
        'author',
    ];
}

