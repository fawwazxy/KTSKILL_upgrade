@extends('layouts.app')

@section('content')
    <style>
        .custom-blue {
            background-color: rgba(0, 81, 180, 0.786);
        }
        .text-custom-blue {
            color: rgba(0, 81, 180, 0.786);
        }
        .sidebar {
            height: 100vh;
            padding-top: 20px;
            border-right: 2px solid rgba(0, 81, 180, 0.3);
        }
        .sidebar-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: rgba(0, 81, 180, 0.9);
            padding-bottom: 10px;
            border-bottom: 2px solid rgba(0, 81, 180, 0.5);
        }
        .nav-link {
            color: rgba(0, 81, 180, 0.8);
            font-weight: 500;
            transition: all 0.3s ease-in-out;
        }
        .nav-link:hover, .nav-link.active {
            background-color: rgba(0, 81, 180, 0.1);
            color: rgba(0, 81, 180, 1);
            border-left: 4px solid rgba(0, 81, 180, 1);
            padding-left: 16px;
        }
        .content-container {
            padding: 40px;
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .course-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            overflow: hidden;
            display: flex; /* Use flexbox */
            flex-direction: column; /* Stack children vertically */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Add shadow */
            margin-bottom: 20px; /* Add margin for spacing */
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
        .accordion-button {
            cursor: pointer;
            width: 100%;
            text-align: left;
            background: none;
            border: none;
            padding: 10px;
            font-size: 1rem;
        }
        .accordion-body {
            padding: 30px 20px;
            display: none; /* Initially hide the body */
        }
        .accordion-body.show {
            display: block; /* Show when active */
        }
        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                height: auto; /* Allow sidebar to adjust height */
                border-right: none; /* Remove border on smaller screens */
                border-bottom: 2px solid rgba(0, 81, 180, 0.3); /* Add bottom border */
            }
            .content-container {
                padding: 20px; /* Reduce padding on smaller screens */
            }
            .course-card {
                margin-bottom: 15px; /* Reduce margin for smaller screens */
            }
        }
    </style>

    <div class="social-icons">
        <ul>
            <li><a href="https://www.facebook.com/ktskillterengganu/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.tiktok.com/@ktskill_institute" target="_blank"><i class="fab fa-tiktok"></i></a></li>
            <li><a href="https://www.instagram.com/ktskill_institute/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
        </ul>
    </div>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar Navigation -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <h5 class="sidebar-title">Kursus</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#course-list">Senarai Kursus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#faq">Soalan Lazim</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content Area -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-4">
                <div class="content-container">
                    <section id="course-list">
                        <h2 class="text-custom-blue">Senarai Kursus Yang Menarik Ditawarkan</h2>
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
                    </section>

                    <!-- FAQ Section -->
                    <section id="faq" class="custom-section bg-light text-dark shadow-sm">
                        <h2 class="section-title text-center">Frequently Asked Questions</h2>
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" onclick="toggleAccordion('collapseOne')">
                                        What courses do you offer?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-body">
                                    We offer a variety of technical and vocational courses tailored to industry standards.
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button" type="button" onclick="toggleAccordion('collapseTwo')">
                                        How can I enroll?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-body">
                                    You can enroll by visiting our website or contacting our admissions office.
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" onclick="toggleAccordion('collapseThree')">
                                        What are the prerequisites for the courses?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-body">
                                    Prerequisites vary by course. Please check the course details for specific requirements.
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </main>
        </div>
    </div>

    <script>
        function toggleAccordion(collapseId) {
            const body = document.getElementById(collapseId);
            if (body.classList.contains('show')) {
                body.classList.remove('show');
            } else {
                const allBodies = document.querySelectorAll('.accordion-body');
                allBodies.forEach(b => b.classList.remove('show'));
                body.classList.add('show');
            }
        }
    </script>
@endsection
