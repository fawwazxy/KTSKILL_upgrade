<!-- resources/views/header.blade.php -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ url('/') }}" class="logo">
                        <img src="{{ asset('assets/images/logo.jpg') }}" alt="Logo" style="width: 20%;">
                    </a>
                    <!-- ***** Logo End ***** -->

                    <!-- ***** Logo End ***** -->

                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section">
                            <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Utama</a>
                        </li>
                        <li class="scroll-to-section">
                            <a href="{{ url('/InfoKorporat') }}" class="{{ request()->is('/InfoKorporat') ? 'active' : '' }}">Info Korporat</a>
                        </li>
                        <li class="scroll-to-section">
                            <a href="{{ url('courses') }}" class="{{ request()->is('courses') ? 'active' : '' }}">Kursus</a>
                        </li>
                        <li class="scroll-to-section">
                            <a href="{{ url('/ProgramAktiviti') }}" class="{{ request()->is('/ProgramAktiviti') ? 'active' : '' }}">Program & Aktiviti</a>
                        </li>
                        <li class="scroll-to-section">
                            <a href="{{ url('/Pelawat') }}" class="{{ request()->is('/Pelawat') ? 'active' : '' }}">Pelawat</a>
                        </li>
                        <li class="scroll-to-section dropdown">
                            <a href="{{ url('/Kakitangan') }}" class="{{ request()->is('/Kakitangan') ? 'active' : '' }} dropdown-toggle" id="kakitanganDropdown" role="button">
                                Kakitangan
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="kakitanganDropdown">
                                <li><a class="dropdown-item" href="{{ url('/admin/login') }}">KT Skill Admin Login</a></li>
                            </ul>
                        </li>
                        <li class="scroll-to-section">
                            <a href="/contact" class="{{ request()->is('/contact') ? 'active' : '' }}">Hubungi Kami</a>
                        </li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
 <!-- Contact Information Section -->
 <div class="contact-info">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <p>Email: <a href="mailto:ktskill@ktsi.edu.my">ktskill@ktsi.edu.my</a></p>
            </div>
            <div class="col-md-3">
                <p>Phone: <a href="tel:+6016-6198849">+6016-6198849</a></p>
            </div>
            <div class="col-md-3">
                <p>Fax: <a href="fax:+609-6164410">+609-6164410</a></p>
            </div>
            <div class="col-md-3">
                <p>Business Hours: Mon-Fri, 9 AM - 5 PM</p>
            </div>
        </div>
    </div>
</div>
</header>

<style>
    .contact-info {
        background-color: rgba(0, 81, 180, 0.786);
        padding: 10px 0;
        text-align: center;
    }
    .contact-info p {
        margin: 0;
    }

    /* Dropdown Hover Effect */
    .dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0; /* Aligns dropdown with the nav link */
    }

    .dropdown-menu {
        background-color: #0051b4; /* Matches the theme color */
        border: none;
        border-radius: 5px;
        padding: 10px 0;
    }

    .dropdown-item {
        color: #fff;
        padding: 10px 20px;
    }

    .dropdown-item:hover {
        background-color: rgba(255, 255, 255, 0.2);
        color: #fff;
    }
</style>
