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
            height: 100vh;
            padding-top: 20px;
            border-right: 2px solid rgba(0, 81, 180, 0.3);
        }
        .sidebar-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: rgba(0, 81, 180, 0.9);
            padding-bottom: 10px;
            border-bottom: 2px solid rgba(0, 81, 180, 0.5);
        }
        .nav-link {
            color: rgba(0, 81, 180, 0.8);
            font-weight: 500;
            transition: all 0.3s ease-in-out;
        }
        .nav-link:hover, .nav-link.active {
            background-color: rgba(0, 81, 180, 0.1);
            color: rgba(0, 81, 180, 1);
            border-left: 4px solid rgba(0, 81, 180, 1);
            padding-left: 16px;
        }
        .content-container {
            padding: 40px;
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
    </style>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar Navigation -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <h5 class="sidebar-title">Navigation</h5>
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

            <!-- Main Content Area -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-4">
                <div class="content-container">
                    <div id="content-area">
                        <h2 class="text-custom-blue">Welcome to Our Institute</h2>
                        <p>Select a section from the left to learn more.</p>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();

                // Remove active class from all links
                document.querySelectorAll('.nav-link').forEach(item => item.classList.remove('active'));

                // Add active class to the clicked link
                this.classList.add('active');

                const target = this.getAttribute('data-target');

                // Load content dynamically
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
            });
        });
    </script>
@endsection
