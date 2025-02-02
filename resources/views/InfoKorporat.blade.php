@extends('layouts.app')

@section('content')
    <style>
        /* Custom Colors and Fonts */
        .custom-blue {
            background-color: rgba(0, 81, 180, 0.786);
        }
        .text-custom-blue {
            color: rgba(0, 81, 180, 0.786);
        }
        .text-custom-light {
            color: rgba(255, 255, 255, 0.8);
        }
        /* Sidebar Style */
        .sidebar {
            min-height: 100%;
            padding-top: 20px;
            border-right: 2px solid rgba(0, 81, 180, 0.3);
            background: #f7f7f7;
        }

        .sidebar-title {
            font-size: 1.4rem;
            font-weight: bold;
            color: rgba(0, 81, 180, 0.9);
            padding-bottom: 15px;
            border-bottom: 2px solid rgba(0, 81, 180, 0.5);
            margin-bottom: 20px;
        }
        .nav-link {
            color: rgba(0, 81, 180, 0.8);
            font-weight: 500;
            padding: 10px;
            transition: all 0.3s ease-in-out;
        }
        .nav-link:hover, .nav-link.active {
            background-color: rgba(0, 81, 180, 0.1);
            color: rgba(0, 81, 180, 1);
            border-left: 4px solid rgba(0, 81, 180, 1);
            padding-left: 16px;
        }

        /* Content Container */
        .content-container {
            padding: 40px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            transition: box-shadow 0.3s ease;
        }
        .content-container:hover {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        .heading-page {
            background: linear-gradient(90deg, rgba(0, 81, 180, 0.9), rgba(0, 99, 255, 0.6));
            color: white;
            padding: 60px 0;
            text-align: center;
        }
        .heading-page h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }
        .heading-page p {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.8);
        }

        /* Clickable Containers */
        .clickable-container {
            background: #fff;
            padding: 20px;
            border: 2px solid #ddd;
            border-radius: 8px;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
            margin-bottom: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .clickable-container:hover {
            background-color: rgba(0, 81, 180, 0.05);
            border-color: rgba(0, 81, 180, 0.5);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        /* Testimonial Section */
        .testimonial-section {
            background: #f8f8f8;
            padding: 40px 0;
            text-align: center;
        }
        .testimonial-section h3 {
            font-size: 2rem;
            margin-bottom: 30px;
        }
        .testimonial-card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        .testimonial-card p {
            font-style: italic;
            color: #555;
        }
        .testimonial-card .author {
            font-weight: bold;
            margin-top: 10px;
        }

        .row {
            display: flex;
        }

        html, body {
            height: 100%;
        }

        /* Video Section */
        .video-section {
            padding: 40px 0;
            text-align: center;
        }
        .video-section iframe {
            width: 100%;
            height: 400px;
            border-radius: 8px;
        }

        /* Call to Action Section */
        .cta-section {
            background: rgba(0, 81, 180, 0.9);
            color: white;
            padding: 60px 0;
            text-align: center;
            border-radius: 8px;
            margin-top: 40px;
        }
        .cta-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .cta-section p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        .cta-section a {
            background-color: #fff;
            color: rgba(0, 81, 180, 1);
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 600;
        }
        .cta-section a:hover {
            background-color: rgba(0, 81, 180, 0.1);
        }
    </style>

    <section class="heading-page" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>INFO KORPORAT</h1>
                    <p>
                        INSTITUT KT SKILL KUALA TERENGGANU                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Media Icons -->
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
            <!-- Sidebar Navigation -->
            <nav class="col-md-3 col-lg-2 d-md-block sidebar">
                <div class="position-sticky">

                    <a href="{{ url('/InfoKorporat') }}" class="logo">
                        <img src="{{ asset('assets/images/logo.jpg') }}" alt="Logo" style="width: 50%;">
                    </a>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" data-target="overview">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-target="leadership">Pemimpin & Eksekutif</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-target="carta-organisasi">Carta Organisasi</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Content Area -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-4">
                <div id="content-area"></div>
            </main>
        </div>
    </div>
@endsection

@section('scripts')
    <script>

            function loadMainContent(target) {
            fetch(`/InfoKorporat/${target}`)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('content-area').innerHTML = html;
                })
                .catch(error => console.error('Error loading content:', error));
        }

            document.addEventListener("DOMContentLoaded", function () {
                loadMainContent('overview'); // Auto-load overview content on page load
        });

        function loadContent(target) {
            // Remove active class from all clickable containers
            document.querySelectorAll('.clickable-container').forEach(item => item.classList.remove('active'));

            // Add active class to the clicked container
            const container = document.querySelector(`.clickable-container[onclick="loadContent('${target}')"]`);
            if (container) {
                container.classList.add('active');
            }

            // Dynamically update content based on the target
            fetch(`/InfoKorporat/${target}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.text();
                })
                .then(html => {
                    document.getElementById('content-area').innerHTML = html;
                })
                .catch(error => console.error('Error loading content:', error));
        }

        // Sidebar navigation click functionality
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();

                // Remove active class from all links
                document.querySelectorAll('.nav-link').forEach(item => item.classList.remove('active'));

                // Add active class to the clicked link
                this.classList.add('active');

                const target = this.getAttribute('data-target');

                // Load content dynamically for the sidebar
                loadContent(target);
            });
        });
    </script>

@endsection
