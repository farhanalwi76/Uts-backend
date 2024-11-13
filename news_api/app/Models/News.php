<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    // Add 'title' to the fillable array
    protected $fillable = [
        'title', 
        'content', // Include any other fields you want to allow for mass assignment
        'author'
    ];
}
