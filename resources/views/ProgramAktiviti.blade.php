@extends('layouts.app')

<style>
    .activity-item {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 15px;
        overflow: hidden;
    }
    .activity-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    }
    .filters li {
        cursor: pointer;
        display: inline-block;
        padding: 10px 20px;
        margin: 0 5px;
        border-radius: 25px;
        transition: all 0.3s ease;
        background: #f8f9fa;
    }
    .filters li.active {
        background: #2a2a2a;
        color: white;
    }
    #back-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: none;
        z-index: 1000;
    }
    .activity-item .down-content {
  background-color: #fff; /* Background color */
  padding: 18px; /* Padding */
  border-bottom-right-radius: 20px; /* Rounded corners */
  border-bottom-left-radius: 20px;
  min-height: 180px; /* Minimum height */
  max-height: 250px; /* Maximum height (adjust as needed) */
  overflow-y: auto; /* Add scrollbar if content overflows */
  flex-direction: column;
  justify-content: space-between; /* Distribute space evenly */
  font-family: 'Poppins', sans-serif; /* Font family */
  font-size: 16px; /* Font size */
  color: #212529; /* Text color */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional: Add shadow for depth */
}

.activity-item .down-content .date {
  font-size: 14px; /* Smaller font size for date */
  color: #6c757d; /* Lighter text color for date */
  margin-bottom: 10px; /* Space below date */
}

.activity-item .down-content h4 {
  font-size: 18px; /* Larger font size for title */
  font-weight: 600; /* Bold title */
  margin-bottom: 10px; /* Space below title */
}

.activity-item .down-content p {
  font-size: 14px; /* Smaller font size for description */
  color: #6c757d; /* Lighter text color for description */
  line-height: 1.5; /* Improve readability */
  margin-bottom: 0; /* Remove default margin */
}

.activity-item .down-content .price {
  font-size: 16px; /* Font size for price */
  font-weight: 600; /* Bold price */
  color: #212529; /* Text color for price */
  margin-top: auto; /* Push price to the bottom */
}
    </style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/isotope-layout@3/dist/isotope.min.css">

@section('content')

<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6>Here are our upcoming meetings</h6>
                <h2>Upcoming Meetings</h2>
            </div>
        </div>
    </div>
</section>

<section class="meetings-page" id="meetings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="filters mb-4">
                    <ul>
                        <li data-filter="*" class="active">All Activities</li>
                        @foreach($years as $year)
                            <li data-filter=".year-{{ $year }}">{{ $year }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            @if($activities->isEmpty())
                <div class="col-12">
                    <div class="alert alert-info">
                        No activities found.
                    </div>
                </div>
            @endif

            <div class="row grid">
                @foreach($activities as $activity)
                    <div class="col-lg-4 templatemo-item-col all year-{{ $activity->year }}">
                        <div class="activity-item">
                            <div class="thumb">
                                @php
                                    $mainImage = $activity->images->first();
                                @endphp
                                <a href="{{ route('activity-detail', $activity->activityID) }}">
                                    @if($mainImage)
                                        <img src="{{ asset($mainImage->image_path) }}"
                                             alt="{{ $activity->activity_name }}"
                                             loading="lazy"
                                             style="height: 250px; object-fit: cover; width: 100%;">
                                    @else
                                        <img src="{{ asset('assets/images/default-activity.jpg') }}"
                                             alt="Default activity image"
                                             loading="lazy"
                                             style="height: 250px; object-fit: cover; width: 100%;">
                                    @endif
                                </a>
                            </div>
                            <div class="down-content">
                                <div class="date">
                                    <h6>{{ $activity->year }}</h6>
                                </div>
                                <a href="{{ route('activity-detail', $activity->activityID) }}">
                                    <h4>{{ $activity->activity_name }}</h4>
                                </a>
                                <p>{{ Str::limit($activity->description, 100) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            @if($activities->hasPages())
                <div class="row mt-4">
                    <div class="col-lg-12">
                        <div class="pagination justify-content-center">
                            {{ $activities->links() }}
                        </div>
                    </div>
                </div>
            @endif
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

    @section('scripts')
        <script src="https://cdn.jsdelivr.net/npm/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Isotope Filtering
                const iso = new Isotope('.grid', {
                    itemSelector: '.templatemo-item-col',
                    layoutMode: 'fitRows',
                    transitionDuration: '0.4s'
                });

                document.querySelectorAll('.filters li').forEach(filter => {
                    filter.addEventListener('click', function() {
                        document.querySelector('.filters .active').classList.remove('active');
                        this.classList.add('active');
                        iso.arrange({ filter: this.getAttribute('data-filter') });
                    });
                });
            });
        </script>
@endsection
@endsection
