<?php

use App\Http\Controllers\InfoKorporatController;
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


Route::get('/course', function () {
    return view('course');
});
Route::get('/course/{course}', function ($course) {
    $courses = [
        'Pemasangan & Penyelenggaraan Elektrik - Satu Fasa' => [
            'title' => 'Electrical Installation & Maintenance - Single Phase',
            'description' => 'This course covers the installation and maintenance of single-phase electrical systems.',
            'modules' => 'Introduction to Electrical Systems, Single Phase Wiring, Circuit Design, Installation of Switches and Outlets, Troubleshooting, Preventative Maintenance, Electrical Safety, Standards and Regulations.',
            'fees' => 'Standard Fee: $499, Early Bird Discount: $399',
            'duration' => '8 weeks (2 classes per week)',
            'prerequisites' => 'Basic knowledge of electrical systems is recommended.',
            'syllabus' => 'The syllabus covers both theoretical and practical aspects of electrical installation and maintenance in single-phase systems. Topics include circuit design, installation techniques, and safety regulations.',
            'financing' => 'Various financing options available through local banks and government schemes.',
            'career' => 'Graduates can work as electrical technicians, electrical system installers, or maintenance technicians in residential and commercial sectors.',
            'related_courses' => [
                'Pemasangan & Penyelenggaraan Satu Fasa Penyaman Udara, Pengudaraan, Pemanasan (HVAC)',
                'Operasi Pemesinan'
            ],
        ],
        'Pemasangan & Penyelenggaraan Satu Fasa Penyaman Udara, Pengudaraan, Pemanasan (HVAC)' => [
            'title' => 'Air Conditioning – Cooling & Air Conditioning Systems - Single Phase',
            'description' => 'This course provides knowledge in the installation, maintenance, and servicing of single-phase air conditioning, ventilation, and heating systems (HVAC).',
            'modules' => 'Introduction to HVAC, Air Conditioning Principles, Installation of Cooling Systems, Air Handling Units, Ventilation Systems, Refrigeration Cycles, Troubleshooting, Maintenance and Service Techniques.',
            'fees' => 'Standard Fee: $399, Early Bird Discount: $299',
            'duration' => '6 weeks (2 classes per week)',
            'prerequisites' => 'Basic knowledge of electrical systems and mechanical engineering is recommended.',
            'syllabus' => 'Students will learn about the different types of HVAC systems, installation procedures, and maintenance practices. Emphasis is placed on troubleshooting common HVAC issues and providing effective solutions.',
            'financing' => 'Financing options are available through scholarships and installment plans.',
            'career' => 'Graduates will be equipped to work as HVAC technicians, installation experts, and maintenance professionals in both commercial and residential sectors.',
            'related_courses' => [
                'Pemasangan & Penyelenggaraan Elektrik - Satu Fasa',
                'Operasi Pemesinan'
            ],
        ],
        'Operasi Pemesinan' => [
            'title' => 'Industrial Machining Operations',
            'description' => 'This course focuses on machining operations used in industrial settings, including cutting, turning, milling, and grinding.',
            'modules' => 'Introduction to Machining, Types of Machines, Turning and Milling Operations, CNC Programming, Grinding Techniques, Material Handling, Safety in Machining, Quality Control in Manufacturing.',
            'fees' => 'Standard Fee: $499, Early Bird Discount: $399',
            'duration' => '10 weeks (2 classes per week)',
            'prerequisites' => 'No prior machining experience required, but basic mechanical knowledge is beneficial.',
            'syllabus' => 'The syllabus includes both theoretical knowledge and practical machining operations. Topics cover CNC programming, safety procedures, and quality assurance in machining.',
            'financing' => 'We offer flexible payment plans and scholarship opportunities for eligible students.',
            'career' => 'Graduates can pursue careers as machinists, CNC operators, tool and die makers, and quality control inspectors in manufacturing industries.',
            'related_courses' => [
                'Pemasangan & Penyelenggaraan Elektrik - Satu Fasa',
                'Pemasangan & Penyelenggaraan Satu Fasa Penyaman Udara, Pengudaraan, Pemanasan (HVAC)'
            ],
        ],
    ];

    $instructors = [
        (object)[
            'name' => 'John Doe',
            'bio' => 'Expert in Electrical Engineering with over 10 years of experience in the field.'
        ],
        (object)[
            'name' => 'Jane Smith',
            'bio' => 'HVAC specialist with extensive knowledge in air conditioning and heating systems.'
        ],
        (object)[
            'name' => 'Alice Johnson',
            'bio' => 'Skilled machinist with a passion for teaching and sharing knowledge.'
        ],
    ];

    if (array_key_exists($course, $courses)) {
        return view('course.show', [
            'courseData' => $courses[$course],
            'relatedCourses' => $courses[$course]['related_courses'],
            'instructors' => $instructors // Pass the instructors variable to the view
        ]);
    } else {
        abort(404); // Course not found
    }
});

// Define a route to handle the static gallery page
Route::get('/meeting/{id}/gallery', function ($id) {
    // Hardcoded logic to return a view with static data
    if ($id == 1) {
        return view('gallery', ['meetingTitle' => 'AI and Machine Learning Summit']);
    }

    abort(404);  // If no meeting found, show 404 error
});


Route::get('/ProgramAktiviti', function () {
    return view('ProgramAktiviti');
});

Route::get('/Pelawat', function () {
    return view('Pelawat');
});

Route::get('/Kakitangan', function () {
    return view('Kakitangan');
});

Route::get('/contact', function () {
    return view('contact');
});
