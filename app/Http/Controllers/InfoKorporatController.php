<?php

// app/Http/Controllers/InfoKorporatController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoKorporatController extends Controller
{
    public function showSection($section)
    {
        // Validate the section to prevent errors
        $validSections = ['overview', 'leadership', 'carta-organisasi'];

        if (!in_array($section, $validSections)) {
            abort(404); // Return a 404 error if the section is invalid
        }

        return view('InfoKorporat.' . $section); // Ensure the views are in the 'corporate' directory
    }
}
