@extends('layouts.app')

@section('content')

    <div class="container-fluid p-0">
        <!-- About Section -->
        <section id="about" style="background-color: #333333; padding: 60px 0; border-bottom: 5px solid #e6f7ff;">
            <div class="container">
                <h2 class="text-center text-light mb-4" style="font-weight: bold;">Tentang Kami</h2>
                <p class="text-justify text-light" style="line-height: 1.8;">
                    INSTITUT KT SKILL KUALA TERENGGANU adalah sebuah institusi pengajian yang telah berdaftar dengan Jabatan Pembangunan Kemahiran,
                    Kementerian Sumber Manusia, dalam menyediakan kursus pendidikan dan latihan teknikal dan vokasional (TVET) untuk para pelajar.
                    Kursus yang ditawarkan sesuai dengan standard pekerjaan yang diiktiraf, dengan penekanan kepada komponen praktikal, kemahiran psikomotor,
                    dan pendedahan kepada latihan di industri.
                </p>
            </div>
        </section>

        <!-- Vision and Mission Section -->
        <section id="vision-mission" style="background-color: #ffffff; padding: 60px 0; border-bottom: 5px solid #e6f7ff;">
            <div class="container">
                <h2 class="text-center text-primary mb-4" style="font-weight: bold;">Visi dan Misi</h2>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="card shadow-sm" style="border-radius: 10px; transition: transform 0.3s; background-color: #f8f9fa;">
                            <div class="card-body">
                                <h3 class="card-title text-primary text-center">Visi</h3>
                                <p class="card-text text-muted text-justify">
                                    Mempertingkatkan keilmuan dan kepakaran dalam bidang kemahiran melalui program latihan yang kompeten, terkini
                                    dan berlandaskan kepada nilai-nilai murni serta profesional.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card shadow-sm" style="border-radius: 10px; transition: transform 0.3s; background-color: #f8f9fa;">
                            <div class="card-body">
                                <h3 class="card-title text-primary text-center">Misi</h3>
                                <p class="card-text text-muted text-justify">
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
        <section id="latar-belakang" style="background-color: #f8f9fa; padding: 60px 0; border-bottom: 5px solid #e6f7ff;">
            <div class="container">
                <h2 class="text-center text-primary mb-4" style="font-weight: bold;">Latar Belakang</h2>
                <p class="text-justify" style="line-height: 1.8;">
                    Pusat Komunikasi Korporat wujud setelah melalui beberapa fasa perubahan pengurusan dan juga staf yang terlibat. Mula dikenali sebagai Unit
                    Komunikasi Korporat (UKK) sebaik sahaja Universiti Darul Iman Malaysia (UDM) ditubuhkan pada tahun 2006. Staf terdiri daripada mereka
                    yang terlibat di dalam Unit Perhubungan Awam, Kolej Ugama Sultan Zainal Abidin (kini dikenali UniSZA Kampus Gong Badak) dan beberapa
                    staf baharu yang dilantik sejajar dengan keperluan fungsian Jabatan.
                </p>
                <p class="text-justify" style="line-height: 1.8;">
                    Pada Mei 2013, UKK dan Pusat Hal Ehwal Antarabangsa digabungkan menjadi PKKA. PKKA diterajui oleh seorang Pengarah dan 2 orang Timbalan
                    Pengarah (Antarabangsa dan Promosi), dibantu oleh 4 orang Pegawai Kumpulan Pengurusan dan Profesional serta 7 orang staf sokongan.
                    Pada Julai 2013, Bahagian Jaringan Industri dan Komuniti (BJIK) dan semua fungsinya dipindahkan juga ke PKKA dan nama PKKA berubah menjadi
                    PKKIA dengan jumlah staf seramai 16 orang. Bulan November 2013, sekali lagi PKKIA berubah nama menjadi PKKA kembali setelah BJIK
                    diasingkan dari PKKIA dan wujud sebagai PTj yang berasingan.
                </p>
                <p class="text-justify" style="line-height: 1.8;">
                    Kini, PKK terus wujud dengan penambahbaikan struktur organisasi dan kekuatan staf seramai 16 orang.
                </p>
            </div>
        </section>

        <!-- Seksyen CCoRM Section -->
        <section id="ccorm" style="background-color: #ffffff; padding: 60px 0; border-bottom: 5px solid #e6f7ff;">
            <div class="container">
                <h2 class="text-center text-primary mb-4" style="font-weight: bold;">Seksyen CCoRM</h2>
                <div class="row">
                    <!-- CCoRM Members -->
                    <div class="col-md-4 mb-3">
                        <div class="card shadow-sm text-center" style="border-radius: 15px; background-color: #f8f9fa;">
                            <div class="card-body">
                                <h5 class="card-title text-primary">PROF. MADYA DR. SYARILLA IRYANI BINTI AHMAD SAANY</h5>
                                <p class="card-text text-muted">Pengarah (DS54)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card shadow-sm text-center" style="border-radius: 15px; background-color: #f8f9fa;">
                            <div class="card-body">
                                <h5 class="card-title text-primary">TS. DR. SHAHRUL ANUWAR BIN MOHAMED YUSOF</h5>
                                <p class="card-text text-muted">Timbalan Pengarah, Promosi dan Pengurusan Perhubungan</p>
                            </div>
                        </div>
                    </div>
                    <!-- Add more CCoRM members here -->
                </div>
            </div>
        </section>

        <!-- Carta Fungsi Section -->
        <section id="carta-fungsi" style="background-color: #333333; padding: 60px 0; border-bottom: 5px solid #e6f7ff;">
            <div class="container text-center">
                <h2 class="text-light mb-4" style="font-weight: bold;">Carta Fungsi</h2>
                <img src="path/to/carta-fungsi.png" alt="Carta Fungsi" class="img-fluid">
            </div>
        </section>

        <!-- Carta Organisasi Section -->
        <section id="carta-organisasi" style="background-color: #ffffff; padding: 60px 0;">
            <div class="container text-center">
                <h2 class="text-primary mb-4" style="font-weight: bold;">Carta Organisasi</h2>
                <img src="path/to/carta-organisasi.png" alt="Carta Organisasi" class="img-fluid">
            </div>
        </section>

        <!-- Stats Section -->
        <section id="stats" style="background-color: #333333; padding: 60px 0; border-bottom: 5px solid #e6f7ff;">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-4">
                        <div class="stats-container shadow-sm rounded p-4" style="background-color: #f8f9fa;">
                            <h3 class="display-4 text-primary fw-bold">3</h3>
                            <p class="text-muted">Kursus Ditawarkan</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stats-container shadow-sm rounded p-4" style="background-color: #f8f9fa;">
                            <h3 class="display-4 text-primary fw-bold">6</h3>
                            <p class="text-muted">Pengajar Berkemahiran</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stats-container shadow-sm rounded p-4" style="background-color: #f8f9fa;">
                            <h3 class="display-4 text-primary fw-bold">63</h3>
                            <p class="text-muted">Jumlah Pelajar</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Teachers Section -->
        <section id="teachers" style="background-color: #ffffff; padding: 60px 0; border-bottom: 5px solid #e6f7ff;">
            <div class="container">
                <h2 class="text-center text-primary mb-4" style="font-weight: bold;">Pengajar Berkemahiran</h2>
                <div id="teacher-carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row justify-content-center">
                                <div class="card text-center shadow" style="width: 18rem; margin: 10px; border-radius: 10px; background-color: #f8f9fa;">
                                    <img src="path/to/teacher1.jpg" class="card-img-top rounded-circle mx-auto mt-3" alt="Teacher 1" style="width: 150px;">
                                    <div class="card-body">
                                        <h5 class="card-title text-primary">Teacher Name 1</h5>
                                        <p class="card-text text-muted">Specialist in [Skill/Subject]</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Additional Teachers Carousel -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#teacher-carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#teacher-carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

        <!-- Leadership Section -->
        <section id="leadership" style="background-color: #333333; padding: 60px 0;">
            <div class="container">
                <h2 class="text-center text-light mb-4" style="font-weight: bold;">Pemimpin & Eksekutif</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card shadow-sm text-center" style="border-radius: 15px; transition: transform 0.3s; background-color: #f8f9fa;">
                            <img src="path/to/leader1.jpg" class="card-img-top rounded-circle mx-auto mt-3" alt="Leader 1" style="width: 150px;">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Leader Name 1</h5>
                                <p class="card-text text-muted">Position/Role</p>
                            </div>
                        </div>
                    </div>
                    <!-- Additional Leadership Cards -->
                </div>
            </div>
        </section>
    </div>

    <script>
        // Hover effect for scaling cards
        document.querySelectorAll('.card').forEach(card => {
            card.addEventListener('mouseover', () => {
                card.style.transform = 'scale(1.05)';
                card.style.boxShadow = '0 10px 25px rgba(0, 0, 0, 0.2)';
            });
            card.addEventListener('mouseout', () => {
                card.style.transform = 'scale(1)';
                card.style.boxShadow = '0 6px 15px rgba(0, 0, 0, 0.1)';
            });
        });
    </script>

@endsection
