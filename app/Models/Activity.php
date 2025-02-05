<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'activity';
    protected $primaryKey = 'activityID'; // Add this line
    public $incrementing = true; // Ensure this is true (default)
    protected $keyType = 'int'; // Match your primary key type

    public function images()
    {
        return $this->hasMany(Image::class, 'activityID');
    }

    protected $fillable = [
        'activity_name', 'description', 'year', 'status',
    ];
}
