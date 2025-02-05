<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'image';
    protected $primaryKey = 'imageID';

    protected $fillable = [
        'image_path', 'activityID'
    ];

    public function activity()
    {
        return $this->belongsTo(Activity::class, 'activityID');
    }
}
