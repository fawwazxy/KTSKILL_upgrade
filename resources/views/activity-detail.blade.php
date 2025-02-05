@extends('layouts.app')

@section('content')
    <style>
        .activity-detail-section {
            padding: 60px 0;
            background-color: #f8f9fa;
        }
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            transition: transform 0.3s ease;
        }
        .gallery-item:hover {
            transform: translateY(-5px);
        }
        .gallery-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 15px;
        }
        .activity-meta-card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        .activity-title {
            font-size: 2rem;
            color: #2a2a2a;
            margin-bottom: 1.5rem;
        }
        .activity-description {
            font-size: 1rem;
            line-height: 1.6;
            color: #495057;
            white-space: pre-wrap;
        }
        .meta-item {
            margin-bottom: 1rem;
            padding: 0.8rem;
            background: #f8f9fa;
            border-radius: 8px;
        }
        .meta-label {
            font-weight: 600;
            color: #6c757d;
            font-size: 0.9rem;
        }
        .meta-value {
            color: #2a2a2a;
            font-size: 1rem;
        }
        .back-button {
            margin-bottom: 30px;
        }
    </style>

    <section class="activity-detail-section">
        <div class="container">


            <!-- Activity Meta Information -->
            <div class="activity-meta-card">
                <h1 class="activity-title">{{ $activity->activity_name }}</h1>
                <div class="row">
                    <div class="col-md-4">
                        <div class="meta-item">
                            <div class="meta-label">Event Year</div>
                            <div class="meta-value">{{ $activity->year }}</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="meta-item">
                            <div class="meta-label">Posted On</div>
                            <div class="meta-value">{{ $activity->created_at->format('M d, Y') }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Replace the entire gallery-grid section with this -->
            @if($activity->images->isNotEmpty())
                <div class="gallery-grid">
                    @foreach($activity->images as $image)
                        <div class="gallery-item">
                            <img src="{{ asset($image->image_path) }}"
                                 alt="Event photo - {{ $activity->activity_name }}"
                                 class="gallery-image">
                        </div>
                    @endforeach
                </div>
            @else
                <div class="alert alert-info">No images available for this activity.</div>
            @endif
            <!-- Activity Description -->
            <div class="activity-meta-card">
                <h3 class="mb-4">Activity Description</h3>
                <div class="activity-description">
                    {!! nl2br(e($activity->description)) !!}
                </div>
            </div>
        </div>
    </section>

    <!-- Social Icons -->
    <div class="social-icons">
        <ul>
            <li><a href="https://www.facebook.com/ktskillterengganu/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.tiktok.com/@ktskill_institute" target="_blank"><i class="fab fa-tiktok"></i></a></li>
            <li><a href="https://www.instagram.com/ktskill_institute/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
        </ul>
    </div>
@endsection
