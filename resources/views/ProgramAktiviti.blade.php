@extends('layouts.app')

<style>
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
                <div class="filters">
                    <ul>
                        <li data-filter="*" class="active">All Activities</li>
                        <li data-filter=".year-2024">2024</li> <!-- Filter for 2024 -->
                        <li data-filter=".year-2025">2025</li> <!-- Filter for 2025 -->
                    </ul>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="row grid">
                    <!-- Display Activities for 2024 -->
                    @foreach($activities2024 as $activity)
                        <div class="col-lg-4 templatemo-item-col all year-{{ $activity->year }}">
                            <div class="activity-item">
                                <div class="thumb">
                                    <!-- Price removed as per your request -->
                                    <div class="price"></div>
                                    
                                    <!-- Randomly Select an Image -->
                                    @php
                                        $images = ['meeting-01.jpg', 'meeting-02.jpg', 'meeting-03.jpg'];
                                        $randomImage = $images[array_rand($images)];
                                    @endphp
                                    <a href="{{ url('activity/' . $activity->id . '/gallery') }}">
                                        <img src="{{ asset('assets/images/' . $randomImage) }}" alt="{{ $activity->activity_name }}">
                                    </a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <!-- Display only the year from created_at -->
                                        <h6>{{$activity->year}}</h6>
                                    </div>
                                    <a href="{{ url('activity-detail/' . $activity->id) }}"><h4>{{ $activity->activity_name }}</h4></a>
                                    <p>{{ $activity->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- Display Activities for 2025 -->
                    @foreach($activities2025 as $activity)
                        <div class="col-lg-4 templatemo-item-col all year-{{ $activity->year }}">
                            <div class="activity-item">
                                <div class="thumb">
                                    <!-- Price removed as per your request -->
                                    <div class="price"></div>
                                    
                                    <!-- Randomly Select an Image -->
                                    @php
                                        $images = ['meeting-01.jpg', 'meeting-02.jpg', 'meeting-03.jpg'];
                                        $randomImage = $images[array_rand($images)];
                                    @endphp
                                    <a href="{{ url('activity/' . $activity->id . '/gallery') }}">
                                        <img src="{{ asset('assets/images/' . $randomImage) }}" alt="{{ $activity->activity_name }}">
                                    </a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <!-- Display only the year from created_at -->
                                        <h6>{{ \Carbon\Carbon::parse($activity->created_at)->format('Y') }}</h6>
                                    </div>
                                    <a href="{{ url('activity-detail/' . $activity->id) }}"><h4>{{ $activity->activity_name }}</h4></a>
                                    <p>{{ $activity->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <div class="social-icons">
        <ul>
            <li><a href="https://www.facebook.com/ktskillterengganu/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.tiktok.com/@ktskill_institute" target="_blank"><i class="fab fa-tiktok"></i></a></li>
            <li><a href="https://www.instagram.com/ktskill_institute/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
        </ul>
    </div>
<script>

</script>
@endsection
