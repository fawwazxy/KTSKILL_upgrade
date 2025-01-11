@extends('layouts.app')

@section('content')
    <!-- Header Area -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- Logo Start -->
                        <a href="{{ url('/') }}" class="logo">Edu Meeting</a>
                        <!-- Logo End -->
                        <!-- Menu Start -->
                        <ul class="nav">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/meeting') }}" class="active">Meetings</a></li>
                            <li><a href="{{ url('/') }}">Apply Now</a></li>
                            <li class="has-sub">
                                <a href="javascript:void(0)">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/meeting') }}">Upcoming Meetings</a></li>
                                    <li><a href="{{ url('/meeting-detail') }}">Meeting Details</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/') }}">Courses</a></li>
                            <li><a href="{{ url('/') }}">Contact Us</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- Menu End -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Heading Section -->
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>Get all details</h6>
                    <h2>Online Teaching and Learning Tools</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Meetings Page Section -->
    <section class="meetings-page" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="meeting-single-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>$14.00</span>
                                    </div>
                                    <div class="date">
                                        <h6>Nov <span>12</span></h6>
                                    </div>
                                    <a href="{{ url('/meeting-details') }}">
                                        <img src="{{ asset('assets/images/single-meeting.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="down-content">
                                    <a href="{{ url('/meeting-details') }}">
                                        <h4>Online Teaching and Learning Tools</h4>
                                    </a>
                                    <p>Recreio dos Bandeirantes, Rio de Janeiro - RJ, 22795-008, Brazil</p>
                                    <p class="description">
                                        This is an edu meeting HTML CSS template provided by 
                                        <a href="https://templatemo.com/" target="_blank" rel="nofollow">TemplateMo website</a>. 
                                        This is a Bootstrap v5.1.3 layout. If you need more free website templates like this one, please visit TemplateMo.
                                        <br><br>You are allowed to use this edu meeting CSS template for your school, university, or business. You can modify or edit this layout but are not allowed to redistribute it.
                                    </p>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="hours">
                                                <h5>Hours</h5>
                                                <p>Monday - Friday: 07:00 AM - 13:00 PM<br>Saturday- Sunday: 09:00 AM - 15:00 PM</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="location">
                                                <h5>Location</h5>
                                                <p>Recreio dos Bandeirantes, 
                                                    <br>Rio de Janeiro - RJ, 22795-008, Brazil
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="book-now">
                                                <h5>Book Now</h5>
                                                <p>010-020-0340<br>090-080-0760</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="share">
                                                <h5>Share:</h5>
                                                <ul>
                                                    <li><a href="#">Facebook</a>,</li>
                                                    <li><a href="#">Twitter</a>,</li>
                                                    <li><a href="#">LinkedIn</a>,</li>
                                                    <li><a href="#">Behance</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="main-button-red">
                                <a href="{{ url('/meeting') }}">Back To Meetings List</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@include('footer')
    </section>
@endsection

@section('scripts')
    <script>
        $('.nav li:first').addClass('active');

        var showSection = function (section, isAnimate) {
            var direction = section.replace(/#/, ''),
                reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
                $('body, html').animate({
                    scrollTop: reqSectionPos
                }, 800);
            } else {
                $('body, html').scrollTop(reqSectionPos);
            }
        };

        var checkSection = function () {
            $('.section').each(function () {
                var $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                    var currentId = $this.data('section'),
                        reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                    reqLink.closest('li').addClass('active').
                    siblings().removeClass('active');
                }
            });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
            e.preventDefault();
            showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
            checkSection();
        });
    </script>
    @endsection
