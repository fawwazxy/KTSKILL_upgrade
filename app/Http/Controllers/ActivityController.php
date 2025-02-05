<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        // Retrieve activities for 2024 and 2025
        $activities2024 = Activity::where('year', 2024)->get();
        $activities2025 = Activity::where('year', 2025)->get();

        return view('ProgramAktiviti', compact('activities2024', 'activities2025')); // Reference to 'activity.blade.php'
    }

    public function show(Activity $activity)
    {
        // Load the activity with its images
        $activity->load('images');
        return view('activity-detail', compact('activity'));
    }
}
