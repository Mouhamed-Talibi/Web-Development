<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // update post : 
    protected $fillable = [
        'title',
        'creator',
        'description'
    ];
}
