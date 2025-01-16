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
                            <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ url('meeting') }}" class="{{ request()->is('meeting') ? 'active' : '' }}">Meetings</a>
                        </li>
                        <li class="scroll-to-section">
                            <a href="#apply" class="{{ request()->is('home') ? 'active' : '' }}">Apply Now</a>
                        </li>
                        <li class="has-sub">
                            <a href="javascript:void(0)">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('meetings') }}" class="{{ request()->is('meetings') ? 'active' : '' }}">Upcoming Meetings</a></li>
                                <li><a href="{{ url('meeting-detail') }}" class="{{ request()->is('meeting-detail') ? 'active' : '' }}">Meeting Details</a></li>
                            </ul>
                        </li>
                        <li class="scroll-to-section">
                            <a href="#courses" class="{{ request()->is('courses') ? 'active' : '' }}">Courses</a>
                        </li>
                        <li class="scroll-to-section">
                            <a href="#contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact Us</a>
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
            <div class="col-md-4">
                <p>Email: <a href="mailto:info@edumeeting.com">info@edumeeting.com</a></p>
            </div>
            <div class="col-md-4">
                <p>Phone: <a href="tel:+1234567890">+1 (234) 567-890</a></p>
            </div>
            <div class="col-md-4">
                <p>Business Hours: Mon-Fri, 9 AM - 5 PM</p>
            </div>
        </div>
    </div>
</div>
</header>

<style>
    .contact-info {
        background-color: #f8f9fa;
        padding: 10px 0;
        text-align: center;
    }
    .contact-info p {
        margin: 0;
    }
</style>