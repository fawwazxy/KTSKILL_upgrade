@extends('layouts.app')

<style>
    .meeting-item .down-content {
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

.meeting-item .down-content .date {
  font-size: 14px; /* Smaller font size for date */
  color: #6c757d; /* Lighter text color for date */
  margin-bottom: 10px; /* Space below date */
}

.meeting-item .down-content h4 {
  font-size: 18px; /* Larger font size for title */
  font-weight: 600; /* Bold title */
  margin-bottom: 10px; /* Space below title */
}

.meeting-item .down-content p {
  font-size: 14px; /* Smaller font size for description */
  color: #6c757d; /* Lighter text color for description */
  line-height: 1.5; /* Improve readability */
  margin-bottom: 0; /* Remove default margin */
}

.meeting-item .down-content .price {
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="filters">
                            <ul>
                                <li data-filter="*" class="active">All Meetings</li>
                                <li data-filter=".year-2024">2024</li> <!-- Filter for 2024 -->
                                <li data-filter=".year-2025">2025</li> <!-- Filter for 2025 -->
                            
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row grid">
                          <!-- 2024 Meetings -->
                          <div class="col-lg-4 templatemo-item-col all year-2024">
                            <div class="meeting-item">
                              <div class="thumb">
                                <div class="price">
                                  <span>$15.00</span>
                                </div>
                                <a href="{{ url('meeting/1/gallery') }}">
                                    <img src="{{ asset('assets/images/meeting-01.jpg') }}" alt="AI Conference">
                                </a>                              
                            </div>
                              <div class="down-content">
                                <div class="date">
                                  <h6>Jan <span>15</span></h6>
                                </div>
                                <a href="{{ url('meeting-detail') }}"><h4>AI and Machine Learning Summit</h4></a>
                                <p>Explore the latest advancements in AI and machine learning technologies.</p>
                              </div>
                            </div>
                          </div>
                      
                          <div class="col-lg-4 templatemo-item-col all year-2024">
                            <div class="meeting-item">
                              <div class="thumb">
                                <div class="price">
                                  <span>$20.00</span>
                                </div>
                                <a href="{{ url('meeting-detail') }}"><img src="{{ asset('assets/images/meeting-03.jpg') }}" alt="Sustainability"></a>
                              </div>
                              <div class="down-content">
                                <div class="date">
                                  <h6>Feb <span>22</span></h6>
                                </div>
                                <a href="{{ url('meeting-detail') }}"><h4>Sustainability and Green Tech</h4></a>
                                <p>Learn about innovative solutions for a sustainable futuressssssssssssssssssssssssssssssssssss.</p>
                              </div>
                            </div>
                          </div>
                      
                          <!-- 2025 Meetings -->
                          <div class="col-lg-4 templatemo-item-col all year-2025">
                            <div class="meeting-item">
                              <div class="thumb">
                                <div class="price">
                                  <span>$25.00</span>
                                </div>
                                <a href="{{ url('meeting-detail') }}"><img src="{{ asset('assets/images/meeting-02.jpg') }}" alt="Future of Work"></a>
                              </div>
                              <div class="down-content">
                                <div class="date">
                                  <h6>Mar <span>10</span></h6>
                                </div>
                                <a href="{{ url('meeting-detail') }}"><h4>Future of Work Conference</h4></a>
                                <p>Discover how remote work and automation are shaping the future of employment.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="col-lg-12">
                        <div class="pagination">
                            <ul>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
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
<script>

</script>
@endsection
