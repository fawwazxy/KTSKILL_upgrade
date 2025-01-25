@extends('layouts.app')

@section('content')
    <!-- Main Banner Section -->
    <section class="section main-banner" id="top" data-section="section1">
        <video autoplay muted loop id="bg-video" class="w-100 h-100" style="object-fit: cover;">
            <source src="{{ asset('assets/images/course-video.mp4') }}" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="caption">
                            <h6>Welcome to Our Institute</h6>
                            <h2>Tentang Kami</h2>
                            <p>INSTITUT KT SKILL KUALA TERENGGANU adalah sebuah institusi pengajian yang telah berdaftar dengan Jabatan Pembangunan Kemahiran, Kementerian Sumber Manusia, dalam menyediakan kursus pendidikan dan latihan teknikal dan vokasional (TVET) untuk para pelajar.</p>
                            <div class="main-button-red">
                                <div class="scroll-to-section"><a href="#about">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->

    <!-- About Section -->
    <section id="about" class="custom-section bg-light text-dark shadow-sm">
        <div class="container">
            <h2 class="section-title text-center">Tentang Kami</h2>
            <p class="text-justify lead">
                INSTITUT KT SKILL KUALA TERENGGANU adalah sebuah institusi pengajian yang telah berdaftar dengan Jabatan Pembangunan Kemahiran,
                Kementerian Sumber Manusia, dalam menyediakan kursus pendidikan dan latihan teknikal dan vokasional (TVET) untuk para pelajar.
                Kursus yang ditawarkan sesuai dengan standard pekerjaan yang diiktiraf, dengan penekanan kepada komponen praktikal, kemahiran psikomotor,
                dan pendedahan kepada latihan di industri.
            </p>
        </div>
    </section>

    <!-- Vision and Mission Section -->
    <section id="vision-mission" class="custom-section bg-dark text-light shadow-sm">
        <div class="container">
            <h2 class="section-titlee text-center">Visi dan Misi</h2>
            <div class="row g-4">
                <div class="col-md-6 mx-auto">
                    <div class="card custom-card h-100">
                        <div class="card-body text-center">
                            <h3 class="card-title">Visi</h3>
                            <p class="card-text">
                                Mempertingkatkan keilmuan dan kepakaran dalam bidang kemahiran melalui program latihan yang kompeten, terkini
                                dan berlandaskan kepada nilai-nilai murni serta profesional.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mx-auto">
                    <div class="card custom-card h-100">
                        <div class="card-body text-center">
                            <h3 class="card-title">Misi</h3>
                            <p class="card-text">
                                Menjadikan INSTITUT KT SKILL sebagai Pusat Kemahiran yang cemerlang dan unggul dalam melahirkan golongan tenaga
                                mahir yang berdaya saing, berketerampilan, berwawasan, dan beretika.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latar Belakang Section -->
    <section id="latar-belakang" class="custom-section bg-light text-dark shadow-sm">
        <div class="container">
            <h2 class="section-title text-center">Latar Belakang</h2>
            <p class="text-center lead">
                Pusat Komunikasi Korporat wujud setelah melalui beberapa fasa perubahan pengurusan dan juga staf yang terlibat. Mula dikenali sebagai Unit
                Komunikasi Korporat (UKK) sebaik sahaja Universiti Darul Iman Malaysia (UDM) ditubuhkan pada tahun 2006. Staf terdiri daripada mereka
                yang terlibat di dalam Unit Perhubungan Awam, Kolej Ugama Sultan Zainal Abidin (kini dikenali UniSZA Kampus Gong Badak) dan beberapa
                staf baharu yang dilantik sejajar dengan keperluan fungsian Jabatan.
            </p>
            <p class="text-center lead">
                Pada Mei 2013, UKK dan Pusat Hal Ehwal Antarabangsa digabungkan menjadi PKKA. PKKA diterajui oleh seorang Pengarah dan 2 orang Timbalan
                Pengarah (Antarabangsa dan Promosi), dibantu oleh 4 orang Pegawai Kumpulan Pengurusan dan Profesional serta 7 orang staf sokongan.
            </p>
            <p class="text-center lead">
                Pada Julai 2013, Bahagian Jaringan Industri dan Komuniti (BJIK) dan semua fungsinya dipindahkan juga ke PKKA dan nama PKKA berubah menjadi
                PKKIA dengan jumlah staf seramai 16 orang. Bulan November 2013, sekali lagi PKKIA berubah nama menjadi PKKA kembali setelah BJIK
                diasingkan dari PKKIA dan wujud sebagai PTj yang berasingan.
            </p>
            <p class="text-center lead">
                Kini, PKK terus wujud dengan penambahbaikan struktur organisasi dan kekuatan staf seramai 16 orang.
            </p>
        </div>
    </section>

    <!-- Leadership Section -->
    <section id="leadership" class="custom-section bg-dark text-light shadow-sm">
        <div class="container">
            <h2 class="section-titlee text-center mb-4">Pemimpin & Eksekutif</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card shadow-sm text-center h-100 bg-light">
                        <img src="path/to/leader1.jpg" class="card-img-top rounded-circle mx-auto mt-3" alt="Leader 1" style="width: 150px;">
                        <div class="card-body">
                            <h5 class="card-title">Leader Name 1</h5>
                            <p class="card-text text-muted">Position/Role</p>
                        </div>
                    </div>
                </div>
                <!-- Add more leaders as needed -->
            </div>
        </div>
    </section>

    <!-- Carta Fungsi Section -->
    <section id="carta-fungsi" class="custom-section bg-light text-dark shadow-sm">
        <div class="container text-center">
            <h2 class="section-title">Carta Fungsi</h2>
            <img src="{{ asset('path/to/carta-fungsi.png') }}" alt="Carta Fungsi" class="img-fluid rounded shadow-sm">
        </div>
    </section>

    <!-- Carta Organisasi Section -->
    <section id="carta-organisasi" class="custom-section bg-dark text-light">
        <div class="container text-center">
            <h2 class="mb-4">Carta Organisasi</h2>
            <img src="path/to/carta-organisasi.png" alt="Carta Organisasi" class="img-fluid rounded shadow-sm">
        </div>
    </section>

    @include('footer')
@endsection

@section('scripts')
    <script>
        // Add any necessary scripts here
    </script>
@endsection

<style>
    /* General Section Styling */
    .main-banner {
        height: 100vh; /* Full viewport height */
        position: relative; /* Position relative for overlay */
        overflow: hidden; /* Hide overflow */
    }

    #bg-video {
        position: absolute; /* Position absolute to fill the section */
        top: 50%; /* Center vertically */
        left: 50%; /* Center horizontally */
        min-width: 100%; /* Minimum width */
        min-height: 100%; /* Minimum height */
        width: auto; /* Auto width */
        height: auto; /* Auto height */
        z-index: 1; /* Behind overlay */
        transform: translate(-50%, -50%); /* Center the video */
    }

    .video-overlay {
        position: absolute; /* Position absolute to cover video */
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
        z-index: 2; /* Above video */
    }

    .custom-section {
        padding: 60px 30px; /* Increased padding */
        margin-bottom: 30px; /* Increased margin */
        border-radius: 15px;
    }

    .shadow-sm {
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15); /* Light shadow */
    }

    /* Section Title */
    .section-title {
        font-size: 2.5rem; /* Increased font size */
        margin-bottom: 30px; /* Increased margin */
        font-weight: bold;
        color: #2c3e50; /* Darker color for better contrast */
    }

    .section-titlee {
        font-size: 2.5rem; /* Increased font size */
        margin-bottom: 30px; /* Increased margin */
        font-weight: bold;
        color: white; /* Darker color for better contrast */
    }

    /* Custom Card Styling */
    .custom-card {
        background-color: #f0f0f0; /* Light gray background */
        color: #333; /* Dark text */
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .custom-card:hover {
        transform: translateY(-5px); /* Slight lift effect */
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); /* Deeper shadow */
    }

    /* Image Styling */
    .rounded {
        border-radius: 15px;
    }

    .rounded-circle {
        border-radius: 50%;
        filter: grayscale(100%); /* Ensure all images are grayscale */
    }

    /* Text Adjustments */
    .text-primary {
        color: #000 !important; /* Black for primary text */
    }

    .text-dark {
        color: #333 !important; /* Dark text */
    }

    .text-light {
        color: #fff !important; /* Light text */
    }

    .text-muted {
        color: #6c757d !important; /* Muted text */
    }

    /* Button Styling */
    .main-button-red a {
        background-color: #e74c3c; /* Button color */
        color: white; /* Text color */
        padding: 10px 20px; /* Padding */
        border-radius: 25px; /* Rounded corners */
        transition: background-color 0.3s ease; /* Smooth transition */
    }

    .main-button-red a:hover {
        background-color: #c0392b; /* Darker shade on hover */
    }

    /* Media Queries for Responsiveness */
    @media (max-width: 768px) {
        .section-title {
            font-size: 2rem; /* Adjusted for smaller screens */
        }

        .lead {
            font-size: 1rem;
            line-height: 1.6;
        }
    }
</style>
