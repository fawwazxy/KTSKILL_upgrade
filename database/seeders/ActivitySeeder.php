<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create an activity
        $activity = Activity::create([
            'activity_name' => 'Robotics Conference',
            'description' => 'A conference on the latest in robotics',
            'year' => 2024,
            'status' => 'active'
        ]);
    }
}
