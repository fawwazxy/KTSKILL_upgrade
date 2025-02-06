<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class Activity_Controller extends Controller
{
    public function index()
    {
        $activities = Activity::with('images')
            ->orderBy('year', 'desc')
            ->paginate(9);

        $years = Activity::select('year')
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year');

        return view('ProgramAktiviti', compact('activities', 'years'));
    }

    public function show(Activity $activity)
    {
        $activity->load(['images' => function($query) {
            $query->orderBy('created_at', 'desc');
        }]);

        return view('activity-detail', compact('activity'));
    }
}
