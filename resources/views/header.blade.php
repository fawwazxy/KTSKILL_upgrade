<!-- resources/views/header.blade.php -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ url('/') }}" class="logo">
                        Edu Meeting
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section">
                            <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
                        </li>
                        <li class="scroll-to-section">
                            <a href="{{ url('course') }}" class="{{ request()->is('course') ? 'active' : '' }}">Courses</a>
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

    <!-- News Ticker Section -->
    <div class="news-ticker">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="ticker">
                        <marquee behavior="scroll" direction="left">
                            <span>Latest News: Our next meeting is scheduled for next Friday. Don't miss it!</span>
                            <span>Latest News: New courses are available for enrollment!</span>
                            <span>Latest News: Join us for our upcoming webinar on educational trends.</span>
                        </marquee>
                    </div>
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
    .news-ticker {
        background-color: #343a40;
        color: white;
        padding: 10px 0;
        text-align: center;
    }
    .news-ticker .ticker {
        overflow: hidden;
    }
</style>