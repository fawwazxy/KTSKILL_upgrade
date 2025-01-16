@extends('layouts.app')

@section('content')
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>{{ $title }}</h2>
                    <p class="text-muted">{{ $description }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="course-details" style="background-color: #f9f9f9; padding: 40px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs justify-content-center" id="courseInfoTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="modules-tab" href="#modules" role="tab" aria-controls="modules" aria-selected="true">
                                Modules
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="fees-tab" href="#fees" role="tab" aria-controls="fees" aria-selected="false">
                                Fees
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="duration-tab" href="#duration" role="tab" aria-controls="duration" aria-selected="false">
                                Duration
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="prerequisites-tab" href="#prerequisites" role="tab" aria-controls="prerequisites" aria-selected="false">
                                Prerequisites
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="instructor-tab" href="#instructor" role="tab" aria-controls="instructor" aria-selected="false">
                                Instructor
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content mt-4" id="courseInfoContent">
                        <!-- Modules Section -->
                        <div class="tab-pane fade show active" id="modules" role="tabpanel" aria-labelledby="modules-tab">
                            <h4>Modules</h4>
                            <p>{{ $modules ?: 'Modules information is currently unavailable.' }}</p>
                        </div>
                        <!-- Fees Section -->
                        <div class="tab-pane fade" id="fees" role="tabpanel" aria-labelledby="fees-tab">
                            <h4>Fees</h4>
                            <p>{{ $fees ?: 'Fee information is currently unavailable.' }}</p>
                        </div>
                        <!-- Duration Section -->
                        <div class="tab-pane fade" id="duration" role="tabpanel" aria-labelledby="duration-tab">
                            <h4>Duration</h4>
                            <p>{{ $duration ?: 'Duration details are currently unavailable.' }}</p>
                        </div>
                        <!-- Prerequisites Section -->
                        <div class="tab-pane fade" id="prerequisites" role="tabpanel" aria-labelledby="prerequisites-tab">
                            <h4>Prerequisites</h4>
                            <p>{{ $prerequisites ?: 'Prerequisite details are currently unavailable.' }}</p>
                        </div>
                        <!-- Instructor Section -->
                        <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
                            <h4>Instructor</h4>
                            <p>{{ $instructor ?: 'Instructor details are currently unavailable.' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Tabs Styling */
        .nav-tabs .nav-link {
            border: 1px solid #ddd;
            border-radius: 8px;
            color: #007bff;
            margin: 0 5px;
            padding: 10px 20px;
        }

        .nav-tabs .nav-link.active {
            background-color: #007bff;
            color: white;
            border: none;
        }

        /* Section Styling */
        .course-details {
            margin-top: 20px;
        }

        .tab-content {
            padding: 20px;
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
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
                padding: 15px;
            }
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
