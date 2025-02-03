<?php

use App\Http\Controllers\InfoKorporatController;
use App\Http\Controllers\ActivityController;
use App\Models\Course;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Route for the main InfoKorporat page
Route::get('/InfoKorporat', function () {
    return view('InfoKorporat');
});

// Route for loading specific sections dynamically
Route::get('/InfoKorporat/{section}', [InfoKorporatController::class, 'showSection']);


// List all courses
Route::get('/course', function () {
    $courses = Course::all(); // Fetch all courses from the database
    return view('course', compact('courses')); // Pass the $courses variable to the view
});

// Show a single course
Route::get('/course/{course}', function (Course $course) {
    // Temporary instructors data (you can create an instructors table later)
    $instructors = [
        (object)['name' => 'John Doe', 'bio' => 'Expert in Electrical Engineering...'],
        (object)['name' => 'Jane Smith', 'bio' => 'HVAC specialist...'],
        (object)['name' => 'Alice Johnson', 'bio' => 'Skilled machinist...'],
    ];

    return view('course.show', [
        'course' => $course,
        'instructors' => $instructors
    ]);
});

// Define a route to handle the static gallery page
Route::get('/meeting/{id}/gallery', function ($id) {
    // Hardcoded logic to return a view with static data
    if ($id == 1) {
        return view('gallery', ['meetingTitle' => 'AI and Machine Learning Summit']);
    }

    abort(404);  // If no meeting found, show 404 error
});


Route::get('/ProgramAktiviti', [ActivityController::class, 'index']);


Route::get('/Pelawat', function () {
    return view('Pelawat');
});

Route::get('/Kakitangan', function () {
    return view('Kakitangan');
});

Route::get('/contact', function () {
    return view('contact');
});
