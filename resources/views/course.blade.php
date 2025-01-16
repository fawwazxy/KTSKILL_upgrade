@extends('layouts.app')

@section('content')
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h6>Browse through our available courses</h6>
                    <h2>Courses</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="course-list" style="background-color: #f9f9f9; padding: 60px 0;">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="card course-card" style="cursor: pointer;">
                        <a href="{{ url('/course/Pemasangan & Penyelenggaraan Elektrik - Satu Fasa') }}">
                            <img src="path/to/laravel-image.jpg" class="card-img-top" alt="Laravel Course">
                            <div class="card-body">
                                <h5 class="card-title">Pemasangan & Penyelenggaraan Elektrik - Satu Fasa</h5>
                                <p class="card-text">Learn electrical installation and maintenance for single-phase systems.</p>
                                <p><strong>Duration:</strong> 1 Fasa</p>
                                <p><strong>Modules:</strong> 8</p>
                                <p><strong>Instructor:</strong> John Doe</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Repeat similar blocks for other courses -->
                <div class="col">
                    <div class="card course-card" style="cursor: pointer;">
                        <a href="{{ url('/course/Pemasangan & Penyelenggaraan Satu Fasa Penyaman Udara, Pengudaraan, Pemanasan (HVAC)') }}">
                            <img src="path/to/react-image.jpg" class="card-img-top" alt="React Course">
                            <div class="card-body">
                                <h5 class="card-title">Pemasangan & Penyelenggaraan Satu Fasa Penyaman Udara, Pengudaraan, Pemanasan (HVAC)</h5>
                                <p class="card-text">Learn HVAC systems maintenance and installation for single-phase systems.</p>
                                <p><strong>Duration:</strong> 1 Fasa</p>
                                <p><strong>Modules:</strong> 6</p>
                                <p><strong>Instructor:</strong> Jane Smith</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card course-card" style="cursor: pointer;">
                        <a href="{{ url('/course/Operasi Pemesinan') }}">
                            <img src="path/to/python-image.jpg" class="card-img-top" alt="Python Course">
                            <div class="card-body">
                                <h5 class="card-title">Operasi Pemesinan</h5>
                                <p class="card-text">Learn machining operations for industrial applications.</p>
                                <p><strong>Duration:</strong> 1 Fasa</p>
                                <p><strong>Modules:</strong> 10</p>
                                <p><strong>Instructor:</strong> Alice Johnson</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Style for course cards */
        .course-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            overflow: hidden;
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 25px;
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
        }

        .heading-page {
            padding: 60px 0;
            background: #003366;
            color: white;
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
@endsection
