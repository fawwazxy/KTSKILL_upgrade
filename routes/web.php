<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/meeting', function () {
    return view('meeting'); 
});

Route::get('/meeting-detail', function () {
    return view('meetingDetails'); 
});

Route::get('/course', function () {
    return view('course'); 
});

Route::get('/course/{course}', function ($course) {
    // Define course details in an associative array
    $courses = [
        'Pemasangan & Penyelenggaraan Elektrik - Satu Fasa' => [
            'title' => 'Pemasangan & Penyelenggaraan Elektrik - Satu Fasa',
            'description' => 'Pemasangan & Penyelenggaraan Elektrik - Satu Fasa',
            'modules' => '',
            'fees' => 'Standard Fee: $499, Early Bird Discount: $399',
            'duration' => '8 weeks (2 classes per week)',
            'prerequisites' => 'Basic knowledge of PHP and web development concepts is recommended.',
            'instructor' => 'John Doe - Senior Laravel Developer',
        ],
        'Pemasangan & Penyelenggaraan Satu Fasa Penyaman Udara, Pengudaraan, Pemanasan (HVAC)' => [
            'title' => 'Pemasangan & Penyelenggaraan Satu Fasa Penyaman Udara, Pengudaraan, Pemanasan (HVAC)',
            'description' => 'Pemasangan & Penyelenggaraan Satu Fasa Penyaman Udara, Pengudaraan, Pemanasan (HVAC).',
            'modules' => 'Introduction to React, Components, State Management, Routing, Hooks, and more.',
            'fees' => 'Standard Fee: $399, Early Bird Discount: $299',
            'duration' => '6 weeks (2 classes per week)',
            'prerequisites' => 'Basic knowledge of JavaScript is recommended.',
            'instructor' => 'Jane Smith - Senior React Developer',
        ],
        'Operasi Pemesinan' => [
            'title' => 'Operasi Pemesinan',
            'description' => 'Operasi Pemesinan',
            'modules' => 'Introduction to Python, Data Types, Control Structures, Functions, and more.',
            'fees' => 'Standard Fee: $499, Early Bird Discount: $399',
            'duration' => '10 weeks (2 classes per week)',
            'prerequisites' => 'No prior programming experience required.',
            'instructor' => 'Alice Johnson - Senior Python Developer',
        ],
    ];

    // Check if the course exists in the array
    if (array_key_exists($course, $courses)) {
        return view('course.show', $courses[$course]);
    } else {
        abort(404); // Course not found
    }
});
