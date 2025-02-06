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
            display: none; /* Hide sidebar */
        }
        .content-container {
            padding: 40px;
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .heading-page {
            background: url('path/to/your/banner-image.jpg') no-repeat center center/cover;
            padding: 60px 0;
            color: white;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        .heading-page h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .heading-page p {
            font-size: 1.2rem;
            margin-bottom: 40px;
        }
        .course-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            height: 100%;
        }
        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        .card-body {
            position: relative;
            padding: 25px;
            height: 250px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .overlay {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            padding: 15px;
        }
        .course-card:hover .overlay {
            opacity: 1;
        }
        .additional-info {
            text-align: center;
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
            display: none;
        }
        .accordion-body.show {
            display: block;
        }
        .text-custom-light {
            color: rgba(255, 255, 255, 0.8);
        }
        /* Responsive Design */
        @media (max-width: 768px) {
            .content-container {
                padding: 20px;
            }
            .course-card {
                margin-bottom: 15px;
            }
            .heading-page h1 {
                font-size: 2rem;
            }
            .heading-page p {
                font-size: 1rem;
            }
        }
    </style>

    <section class="heading-page" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Welcome to Our Technical Courses</h1>
                    <p class="text-custom-light">
                        Explore a range of hands-on, industry-focused courses designed to equip you with practical skills and knowledge for your career advancement. Choose the course that fits your needs and unlock new opportunities in your field.
                    </p>
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

    <div class="container-fluid">
        <div class="row">
            <main class="col-md-12 px-4">
                <div class="content-container">
                    <section id="course-list">
                        <h2 class="text-custom-blue" style="text-align: center">Explore Our Courses</h2>
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                            @foreach($courses as $course)
                                <div class="col">
                                    <div class="card course-card">
                                        <a href="{{ url('/courses/' . $course->courseCode) }}">
                                            @if($course->imagePath)
                                                <img src="{{ asset($course->imagePath) }}" class="card-img-top" alt="{{ $course->courseName }}">
                                            @endif
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $course->courseName }}</h5>
                                                <p class="card-text">{{ $course->courseCode }}</p>
                                                <div class="overlay">
                                                    <div class="additional-info">
                                                        <p><strong>Duration:</strong> {{ $course->duration }}</p>
                                                        <p><strong>Requirements:</strong> {{ Str::limit($course->requirement, 50) }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>


                </div>
            </main>
        </div>
    </div>

    <script>

    </script>
@endsection
