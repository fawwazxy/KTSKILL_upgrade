@extends('layouts.app')

@section('content')
    <style>
        /* Style for course cards */
        .course-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            overflow: hidden;
            display: flex; /* Use flexbox */
            flex-direction: column; /* Stack children vertically */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Add shadow */
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Deeper shadow on hover */
        }

        .card-body {
            position: relative; /* Set position to relative for absolute positioning of overlay */
            padding: 25px;
            height: 250px; /* Increase the fixed height for the card body */
            display: flex; /* Use flexbox */
            flex-direction: column; /* Stack children vertically */
            justify-content: space-between; /* Space out children */
        }

        .overlay {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0; /* Position at the bottom of the card body */
            background-color: rgba(0, 0, 0, 0.7); /* Black background with transparency */
            color: white; /* Text color for overlay */
            display: flex;
            align-items: center; /* Center the content vertically */
            justify-content: center; /* Center the content horizontally */
            opacity: 0; /* Start hidden */
            transition: opacity 0.3s ease; /* Smooth transition for opacity */
            padding: 15px; /* Increase padding for better spacing */
        }

        .course-card:hover .overlay {
            opacity: 1; /* Show overlay on hover */
        }

        .additional-info {
            text-align: center; /* Center the text in the overlay */
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #333;
        }

        .card-text {
            color: #555;
            margin-bottom: 15px;
            font-size: 1rem;
            flex-grow: 1; /* Allow the text to grow */
            overflow: hidden; /* Hide overflow */
            text-overflow: ellipsis; /* Add ellipsis for overflow text */
            display: -webkit-box; /* For ellipsis */
            -webkit-box-orient: vertical; /* For ellipsis */
            -webkit-line-clamp: 3; /* Limit to 3 lines */
        }

        .heading-page {
            padding: 60px 0;
            background: #003366;
            color: white;
            text-align: center; /* Center text */
        }

        .heading-page h2 {
            font-size: 2.5rem;
            font-weight: 600;
            margin-top: 15px;
        }

        .heading-page h6 {
            font-size: 1.2rem;
            font-weight: 400;
        }

        /* Testimonials Section */
        .testimonial-card {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin: 10px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease; /* Add transition */
        }

        .testimonial-card:hover {
            transform: translateY(-3px); /* Slight lift effect */
        }

        /* FAQ Section */
        .accordion-item {
            border: none; /* Remove border */
        }

        .accordion-button {
            background-color: #e9ecef; /* Light background */
            color: #333; /* Dark text */
            border-radius: 5px; /* Rounded corners */
        }

        .accordion-button:not(.collapsed) {
            background-color: #007bff; /* Active background */
            color: white; /* Active text */
        }

        @media (max-width: 768px) {
            .heading-page h2 {
                font-size: 2rem;
            }

            .card-title {
                font-size: 1.1rem;
            }

            .card-text {
                font-size: 0.9rem;
            }
        }
    </style>

    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Kursus</h2>
                    <h6>Senarai Kursus Yang Menarik Ditawarkan</h6>
                </div>
            </div>
        </div>
    </section>

    <div class="social-icons">
        <ul>
            <li><a href="https://www.facebook.com/ktskillterengganu/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.tiktok.com/@ktskill_institute" target="_blank"><i class="fab fa-tiktok"></i></a></li>
            <li><a href="https://www.instagram.com/ktskill_institute/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
        </ul>
    </div>

    <section class="course-list" style="background-color: #f9f9f9; padding: 60px 0;">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="card course-card" style="cursor: pointer;">
                        <a href="{{ url('/course/Pemasangan & Penyelenggaraan Elektrik - Satu Fasa') }}">
                            <img src="path/to/laravel-image.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Pemasangan & Penyelenggaraan Elektrik - Satu Fasa</h5>
                                <p class="card-text">Learn electrical installation and maintenance for single-phase systems.</p>
                                <div class="overlay">
                                    <div class="additional-info">
                                        <p><strong>Duration:</strong> 1 Fasa</p>
                                        <p><strong>Modules:</strong> 8</p>
                                        <p><strong>Instructor:</strong> John Doe</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card course-card" style="cursor: pointer;">
                        <a href="{{ url('/course/Pemasangan & Penyelenggaraan Satu Fasa Penyaman Udara, Pengudaraan, Pemanasan (HVAC)') }}">
                            <img src="path/to/react-image.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Pemasangan & Penyelenggaraan Satu Fasa Penyaman Udara, Pengudaraan, Pemanasan (HVAC)</h5>
                                <p class="card-text">Learn HVAC systems maintenance and installation for single-phase systems.</p>
                                <div class="overlay">
                                    <div class="additional-info">
                                        <p><strong>Duration:</strong> 1 Fasa</p>
                                        <p><strong>Modules:</strong> 6</p>
                                        <p><strong>Instructor:</strong> Jane Smith</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card course-card" style="cursor: pointer;">
                        <a href="{{ url('/course/Operasi Pemesinan') }}">
                            <img src="path/to/python-image.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Operasi Pemesinan</h5>
                                <p class="card-text">Learn machining operations for industrial applications.</p>
                                <div class="overlay">
                                    <div class="additional-info">
                                        <p><strong>Duration:</strong> 1 Fasa</p>
                                        <p><strong>Modules:</strong> 10</p>
                                        <p><strong>Instructor:</strong> Alice Johnson</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="custom-section bg-light text-dark shadow-sm">
        <div class="container">
            <h2 class="section-title text-center">Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What courses do you offer?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We offer a variety of technical and vocational courses tailored to industry standards.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How can I enroll?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            You can enroll by visiting our website or contacting our admissions office.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            What are the prerequisites for the courses?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Prerequisites vary by course. Please check the course details for specific requirements.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
