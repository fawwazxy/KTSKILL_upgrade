@extends('layouts.app')

@section('content')
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>{{ $title }}</h2>
                    <p>{{ $description }}</p>
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
                    <p>{{ $modules }}</p>
                </div>
                <div class="tab-pane fade" id="fees" role="tabpanel" aria-labelledby="fees-tab">
                    <p>{{ $fees }}</p>
                </div>
                <div class="tab-pane fade" id="duration" role="tabpanel" aria-labelledby="duration-tab">
                    <p>{{ $duration }}</p>
                </div>
                <div class="tab-pane fade" id="prerequisites" role="tabpanel" aria-labelledby="prerequisites-tab">
                    <p>{{ $prerequisites }}</p>
                </div>
                <div class="tab-pane fade" id="syllabus" role="tabpanel" aria-labelledby="syllabus-tab">
                    <p>{{ $syllabus }}</p>
                </div>
                <div class="tab-pane fade" id="financing" role="tabpanel" aria-labelledby="financing-tab">
                    <p>{{ $financing }}</p>
                </div>
                <div class="tab-pane fade" id="career" role="tabpanel" aria-labelledby="career-tab">
                    <p>{{ $career }}</p>
                </div>
            </div>
        </div>
    </section>

    <style>
        .nav-tabs .nav-link {
            border: none;
            border-radius: 0;
            color: #007bff;
        }

        .nav-tabs .nav-link.active {
            background-color: #007bff;
            color: white;
        }

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
