<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'image',
        'duration',
        'category_id',
        'title',
        'description',
        'user_id',
        'tags'
    ];
}
