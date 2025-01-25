@extends('layouts.app')

@section('content')
    <section class="heading-page header-text" id="top">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h2>{{ $courseData['title'] }}</h2>
                    <p>{{ $courseData['description'] }}</p>
                    <a href="{{ url('/brochure/course-brochure.pdf') }}" class="btn btn-primary" download>Download Course Brochure</a>
                </div>
            </div>
        </div>
    </section>

    <section class="course-details">
        <div class="container">
            <ul class="nav nav-tabs" id="courseInfoTabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="modules-tab" data-toggle="tab" href="#modules" role="tab" aria-controls="modules" aria-selected="true">Modules</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="fees-tab" data-toggle="tab" href="#fees" role="tab" aria-controls="fees" aria-selected="false">Fees</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="duration-tab" data-toggle="tab" href="#duration" role="tab" aria-controls="duration" aria-selected="false">Duration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="prerequisites-tab" data-toggle="tab" href="#prerequisites" role="tab" aria-controls="prerequisites" aria-selected="false">Prerequisites</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="syllabus-tab" data-toggle="tab" href="#syllabus" role="tab" aria-controls="syllabus" aria-selected="false">Syllabus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="financing-tab" data-toggle="tab" href="#financing" role="tab" aria-controls="financing" aria-selected="false">Financing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="career-tab" data-toggle="tab" href="#career" role="tab" aria-controls="career" aria-selected="false">Career Opportunities</a>
                </li>
            </ul>
            <div class="tab-content" id="courseInfoContent">
                <div class="tab-pane fade show active" id="modules" role="tabpanel" aria-labelledby="modules-tab">
                    <div class="tab-card">
                        <p>{{ $courseData['modules'] }}</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="fees" role="tabpanel" aria-labelledby="fees-tab">
                    <div class="tab-card">
                        <p>{{ $courseData['fees'] }}</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="duration" role="tabpanel" aria-labelledby="duration-tab">
                    <div class="tab-card">
                        <p>{{ $courseData['duration'] }}</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="prerequisites" role="tabpanel" aria-labelledby="prerequisites-tab">
                    <div class="tab-card">
                        <p>{{ $courseData['prerequisites'] }}</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="syllabus" role="tabpanel" aria-labelledby="syllabus-tab">
                    <div class="tab-card">
                        <p>{{ $courseData['syllabus'] }}</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="financing" role="tabpanel" aria-labelledby="financing-tab">
                    <div class="tab-card">
                        <p>{{ $courseData['financing'] }}</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="career" role="tabpanel" aria-labelledby="career-tab">
                    <div class="tab-card">
                        <p>{{ $courseData['career'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Courses Section -->
    <section class="related-courses" style="padding: 60px 0;">
        <div class="container">
            <h2 class="section-title text-center">Related Courses</h2>
            <div class="row">
                @foreach($courseData['related_courses'] as $relatedCourse)
                    <div class="col-md-4">
                        <div class="card course-card">
                            <a href="{{ url('/course/' . $relatedCourse) }}">
                                <img src="path/to/related-image.jpg" class="card-img-top" alt="{{ $relatedCourse }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $relatedCourse }}</h5>
                                    <p class="card-text">{{ $courseData['description'] }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Instructor Profiles Section -->
    <section class="instructor-profiles" style="padding: 60px 0;">
        <div class="container">
            <h2 class="section-title text-center">Meet Our Instructors</h2>
            <div class="row">
                @foreach($instructors as $instructor)
                    <div class="col-md-4">
                        <div class="instructor-card">
                            <h5>{{ $instructor->name }}</h5>
                            <p>{{ $instructor->bio }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <style>
        /* Tabs Styling */
        .nav-tabs .nav-link {
            border: none;
            border-radius: 0;
            color: #007bff;
            font-weight: 500;
            text-transform: uppercase;
            padding: 10px 20px;
            margin-bottom: 0;
        }

        .nav-tabs .nav-link.active {
            background-color: #007bff;
            color: white;
        }

        .course-details {
            margin-top: 30px;
            margin-bottom: 50px; /* Add this line for spacing between course details and footer */
        }

        .tab-content {
            padding: 25px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .tab-card {
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
        }

        .related-courses {
            background-color: #f9f9f9;
            padding: 60px 0;
        }

        .instructor-profiles {
            background-color: #f8f9fa;
            padding: 60px 0;
        }

        .instructor-card {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin: 10px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-tabs {
                flex-wrap: wrap;
                justify-content: center;
            }

            .nav-tabs .nav-link {
                margin-bottom: 10px;
                width: 100%;
                text-align: center;
            }

            .tab-content {
                padding: 20px;
            }

            .tab-card {
                padding: 10px;
            }

            .related-courses .card {
                margin-bottom: 20px;
            }

            .instructor-card {
                margin-bottom: 20px;
            }
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #007bff;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-track {
            background-color: #f0f4f8;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Function to activate the tab based on the URL hash
            function activateTabFromHash() {
                const hash = window.location.hash || '#modules'; // Default to '#modules'
                const targetTab = document.querySelector(`.nav-link[href="${hash}"]`);
                if (targetTab) {
                    // Remove active class from all tabs and tab-content
                    document.querySelectorAll('.nav-link').forEach(tab => tab.classList.remove('active'));
                    document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.remove('show', 'active'));

                    // Add active class to the selected tab and content
                    targetTab.classList.add('active');
                    const targetPane = document.querySelector(hash);
                    if (targetPane) {
                        targetPane.classList.add('show', 'active');
                    }
                }
            }

            // Handle click on tabs
            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault(); // Prevent the default anchor behavior
                    window.location.hash = e.target.getAttribute('href'); // Update the URL hash
                    activateTabFromHash(); // Activate the corresponding tab
                });
            });

            // Initial activation of the tab from the URL hash
            activateTabFromHash();
        });
    </script>
@endsection
