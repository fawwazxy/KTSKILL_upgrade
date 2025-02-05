@extends('layouts.app')

@section('content')
    <!-- Add GLightbox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
    <!-- Add Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Lightbox customization */
        .glightbox-container .gslide-image img {
            max-height: 80vh;
            width: auto !important;
        }
        .glightbox-clean .gclose, .glightbox-clean .gnext, .glightbox-clean .gprev {
            color: #fff;
            opacity: 0.8;
        }
        .glightbox-clean .gclose:hover, .glightbox-clean .gnext:hover, .glightbox-clean .gprev:hover {
            opacity: 1;
        }
        .glightbox-loader {
            border: 2px solid #fff;
            border-top-color: transparent;
        }

        /* Gallery styles */
        .gallery-item {
            cursor: zoom-in;
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

        /* Existing activity styles */
        .activity-detail-section
        { padding: 60px 0; background-color: #f8f9fa;
        }

        .gallery-grid
        {
            display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px;
        }
        .activity-meta-card { background: white; padding: 25px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        .activity-title { font-size: 2rem; color: #2a2a2a; }
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
            font-size: 1rem;}
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

            @if($activity->images->isNotEmpty())
                <div class="gallery-grid">
                    @foreach($activity->images as $index => $image)
                        <a href="{{ asset($image->image_path) }}"
                           class="gallery-item glightbox"
                           data-glightbox="title: Image {{ $index + 1 }}; description: {{ $activity->activity_name }}"
                           data-gallery="gallery-{{ $activity->activityID }}">
                            <img src="{{ asset($image->image_path) }}"
                                 alt="Event photo - {{ $activity->activity_name }}"
                                 class="gallery-image">
                        </a>
                    @endforeach
                </div>
            @else
                <div class="alert alert-info">No images available for this activity.</div>
            @endif
        </div>
    </section>

    <!-- Social Icons -->
    <div class="social-icons">
        <ul>
            <li><a href="https://www.facebook.com/ktskillterengganu/" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href="https://www.tiktok.com/@ktskill_institute" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
            <li><a href="https://www.instagram.com/ktskill_institute/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
        </ul>
    </div>

    <!-- GLightbox JS with initialization -->
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const lightbox = GLightbox({
                selector: '.glightbox',
                touchNavigation: true,
                loop: true,
                zoomable: true,
                openEffect: 'fade',
                closeEffect: 'fade',
                preload: true,
                svg: {
                    close: '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>',
                    next: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>',
                    prev: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>'
                }
            });
        });
    </script>
@endsection
