<?php

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

        // If the section is 'leadership', pass leadership data
        if ($section === 'leadership') {
            $leadership = [
                'CEO' => (object) [
                    'name' => 'YBhg. Profesor Datuk Ts. Dr. Shahrin bin Sahib @ Sahibuddin, FASc',
                    'position' => 'Naib Canselor',
                    'email' => 'vc@uitm.edu.my',
                    'phone' => '603-5544 2222',
                    'fax' => '603-5544 2030',
                    'image' => 'assets/images/ceo.jpg',
                ],
                'heads' => [
                    (object) [
                        'name' => 'John Doe',
                        'position' => 'Head of IT',
                        'email' => 'john@example.com',
                        'phone' => '6012-3456789',
                        'image' => 'assets/images/head-it.jpg',
                    ],
                    (object) [
                        'name' => 'Jane Smith',
                        'position' => 'Head of HR',
                        'email' => 'jane@example.com',
                        'phone' => '6012-9876543',
                        'image' => 'assets/images/head-hr.jpg',
                    ],
                ],
                'leaders' => [
                    (object) [
                        'name' => 'Michael Lee',
                        'position' => 'IT Manager',
                        'email' => 'michael@example.com',
                        'image' => 'assets/images/manager-it.jpg',
                    ],
                    (object) [
                        'name' => 'Sarah Tan',
                        'position' => 'HR Manager',
                        'email' => 'sarah@example.com',
                        'image' => 'assets/images/manager-hr.jpg',
                    ],
                ],
            ];

            return view('InfoKorporat.leadership', compact('leadership'));
        }

        return view('InfoKorporat.' . $section);
    }
}
