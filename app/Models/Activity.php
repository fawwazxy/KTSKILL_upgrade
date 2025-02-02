<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    use HasFactory, SoftDeletes;

    // Explicitly declare the table name if it differs from the model name
    protected $table = 'activity';  // Specify the table name here

    protected $fillable = [
        'activity_name', 'description', 'year', 'status',
    ];

    // Cast the 'images' attribute as an array (optional, for multiple images)
    protected $casts = [
        'images' => 'array',
    ];
}

