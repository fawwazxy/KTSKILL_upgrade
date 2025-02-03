<?php

namespace Database\Seeders;
use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            [
                'courseName' => 'Pemasangan & Penyelenggaraan Elektrik - Satu Fasa',
                'courseCode' => 'ELEC101',
                'imagePath' => 'images/courses/electrical.jpg',
                'requirement' => 'Basic knowledge of electrical systems',
                'duration' => '8 weeks',
                'syllabus' => 'Introduction to Electrical Systems, Single Phase Wiring, Circuit Design...',
                'financing' => 'Standard Fee: $499, Early Bird Discount: $399',
                'career_opportunities' => 'Electrical technicians, maintenance professionals...'
            ],
            [
                'courseName' => 'Pemasangan & Penyelenggaraan Satu Fasa Penyaman Udara, Pengudaraan, Pemanasan (HVAC)',
                'courseCode' => 'HVAC101',
                'imagePath' => 'images/courses/hvac.jpg',
                'requirement' => 'Basic knowledge of HVAC systems',
                'duration' => '6 weeks',
                'syllabus' => 'Introduction to HVAC, Air Conditioning Principles...',
                'financing' => 'Standard Fee: $399, Early Bird Discount: $299',
                'career_opportunities' => 'HVAC technicians, installation experts...'
            ],
            // Add more courses as needed
        ];

        foreach ($courses as $courseData) {
            Course::create($courseData);
        }
    }
}
