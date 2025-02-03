<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'courseID';
    protected $fillable = [
        'courseName',
        'courseCode',
        'imagePath',
        'requirement',
        'duration',
        'syllabus',
        'financing',
        'career_opportunities'
    ];

    // Use courseCode for route model binding
    public function getRouteKeyName()
    {
        return 'courseCode';
    }
}
