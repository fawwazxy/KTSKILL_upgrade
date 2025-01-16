@extends('layouts.app')

@section('content')
<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6>Browse through our available courses</h6>
                <h2>Courses</h2>
            </div>
        </div>
    </div>
</section>

<section class="course-list" style="background-color: #f0f4f8; padding: 40px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card course-card" style="cursor: pointer;">
                    <a href="{{ url('/course/Pemasangan & Penyelenggaraan Elektrik - Satu Fasa') }}">
                        <img src="path/to/laravel-image.jpg" class="card-img-top" alt="Laravel Course">
                        <div class="card-body">
                            <h5 class="card-title">Pemasangan & Penyelenggaraan Elektrik - Satu Fasa</h5>
                            <p class="card-text">Pemasangan & Penyelenggaraan Elektrik - Satu Fasa.</p>
                            <p><strong>Duration:</strong> 1 Fasa</p>
                            <p><strong>Modules:</strong> 8</p>
                            <p><strong>Instructor:</strong> John Doe</p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Repeat similar blocks for other courses -->
            <div class="col-lg-4">
                <div class="card course-card" style="cursor: pointer;">
                    <a href="{{ url('/course/Pemasangan & Penyelenggaraan Satu Fasa Penyaman Udara, Pengudaraan, Pemanasan (HVAC)') }}">
                        <img src="path/to/react-image.jpg" class="card-img-top" alt="React Course">
                        <div class="card-body">
                            <h5 class="card-title">Pemasangan & Penyelenggaraan Satu Fasa Penyaman Udara, Pengudaraan, Pemanasan (HVAC)</h5>
                            <p class="card-text">Pemasangan & Penyelenggaraan Satu Fasa Penyaman Udara, Pengudaraan, Pemanasan (HVAC).</p>
                            <p><strong>Duration:</strong> 1 Fasa</p>
                            <p><strong>Modules:</strong> 6</p>
                            <p><strong>Instructor:</strong> Jane Smith</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card course-card" style="cursor: pointer;">
                    <a href="{{ url('/course/Operasi Pemesinan') }}">
                        <img src="path/to/python-image.jpg" class="card-img-top" alt="Python Course">
                        <div class="card-body">
                            <h5 class="card-title">Operasi Pemesinan</h5>
                            <p class="card-text">Operasi Pemesinan.</p>
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
    .course-card {
        transition: transform 0.2s;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
    }

    .course-card:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: bold;
    }

    .card-text {
        margin-bottom: 10px;
    }
</style>
@endsection
