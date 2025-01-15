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

<section class="course-list">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card course-card" style="cursor: pointer;" data-toggle="modal" data-target="#courseModal" 
                    data-title="Laravel Development" 
                    data-description="Learn the fundamentals of Laravel, a popular PHP framework for web development." 
                    data-modules="Introduction to Laravel, Routing and Middleware, Controllers and Views, Database Migrations and Eloquent ORM, Form Validation and Authentication, RESTful APIs with Laravel, Testing and Debugging, Deployment and Best Practices" 
                    data-fees="Standard Fee: $499, Early Bird Discount: $399" 
                    data-duration="8 weeks (2 classes per week)" 
                    data-prerequisites="Basic knowledge of PHP and web development concepts is recommended." 
                    data-instructor="John Doe - Senior Laravel Developer">
                    <img src="path/to/laravel-image.jpg" class="card-img-top" alt="Laravel Course">
                    <div class="card-body">
                        <h5 class="card-title">Laravel Development</h5>
                        <p class="card-text">Learn the fundamentals of Laravel, a popular PHP framework for web development.</p>
                    </div>
                </div>
            </div>
            <!-- Repeat similar blocks for other courses -->
        </div>
    </div>
</section>

<!-- Course Modal -->
<div class="modal fade" id="courseModal" tabindex="-1" role="dialog" aria-labelledby="courseModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="courseModalLabel">Course Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="courseDescription"></p>
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
                        <a class="nav-link" id="instructor-tab" data-toggle="tab" href="#instructor" role="tab" aria-controls="instructor" aria-selected="false">Instructor</a>
                    </li>
                </ul>
                <div class="tab-content" id="courseInfoContent">
                    <div class="tab-pane fade show active" id="modules" role="tabpanel" aria-labelledby="modules-tab">
                        <p id="courseModules"></p>
                    </div>
                    <div class="tab-pane fade" id="fees" role="tabpanel" aria-labelledby="fees-tab">
                        <p id="courseFees"></p>
                    </div>
                    <div class="tab-pane fade" id="duration" role="tabpanel" aria-labelledby="duration-tab">
                        <p id="courseDuration"></p>
                    </div>
                    <div class="tab-pane fade" id="prerequisites" role=" tabpanel" aria-labelledby="prerequisites-tab">
                        <p id="coursePrerequisites"></p>
                    </div>
                    <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
                        <p id="courseInstructor"></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Enroll Now</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('.course-card').on('click', function() {
            var title = $(this).data('title');
            var description = $(this).data('description');
            var modules = $(this).data('modules');
            var fees = $(this).data('fees');
            var duration = $(this).data('duration');
            var prerequisites = $(this).data('prerequisites');
            var instructor = $(this).data('instructor');

            $('#courseModalLabel').text(title);
            $('#courseDescription').text(description);
            $('#courseModules').text(modules);
            $('#courseFees').text(fees);
            $('#courseDuration').text(duration);
            $('#coursePrerequisites').text(prerequisites);
            $('#courseInstructor').text(instructor);
        });
    });
</script>
@endsection