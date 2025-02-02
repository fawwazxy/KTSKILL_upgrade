@extends('layouts.app')

@section('content')
    <style>
        .swiper-caption {
            position: absolute;
            bottom: 20px;
            left: 20px;
            color: #fff;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 5px;
        }

        

        /* Other styles... */
        .swiper-container {
    width: 100%; /* Full width */
    height: 80vh; /* Increased height */
    max-height: none; /* Remove the height limit if needed */
    position: relative;
    overflow: hidden;
    z-index: 1;
    padding: 20px
}


        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            background-color: grey; /* Optional: Fallback background color */
        }

        .swiper-slide img {
            height: 100%;
        }

        .section-title {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 30px;
        }
        .section-title h2 {
            font-size: 36px;
            font-weight: bold;
            color: #1a1a1a;
        }
        .section-title h4 {
            font-size: 18px;
            color: #e74c3c;
            margin-bottom: 10px;
        }


        
        .card {
    border: none;
    margin-bottom: 30px;
    cursor: pointer;
    position: relative; /* For positioning child elements */
    overflow: hidden; /* Prevent overflow of content */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: scale(1.05); /* Slightly enlarge the card */
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); /* Add a shadow effect */
}

.card img {
    width: 100%;
    height: auto;
    transition: transform 0.3s ease; /* Smooth transition for image zoom */
}

.card:hover img {
    transform: scale(1.1); /* Slight zoom effect on the image */
}

.card-title {
    font-size: 16px;
    font-weight: bold;
    color: #fff;
    background-color: rgba(0, 0, 0, 0.7); /* Darker background for better readability */
    padding: 10px 0;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    text-align: center;
    box-sizing: border-box;
    margin: 0;
    transition: background-color 0.3s ease, transform 0.3s ease; /* Add smooth animations */
}

.card:hover .card-title {
    background-color: rgba(0, 0, 0, 0.9); /* Darker background on hover */
    transform: scale(1.05); /* Slight enlargement of the title */
}


    </style>

    <div class="swiper-container header-text" id="eventSwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('assets/images/course-01.jpg') }}" alt="Event Image 1">
                <div class="swiper-caption">
                    <h5>Event Title 1</h5>
                    <p>Description for event 1.</p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/images/course-02.jpg') }}" alt="Event Image 2">
                <div class="swiper-caption">
                    <h5>Event Title 2</h5>
                    <p>Description for event 2.</p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/images/course-03.jpg') }}" alt="Event Image 3">
                <div class="swiper-caption">
                    <h5>Event Title 3</h5>
                    <p>Description for event 3.</p>
                </div>
            </div>
        </div>
        <!-- Add navigation buttons -->
 
        <!-- Add pagination -->
        <div class="swiper-pagination"></div>
    </div>


    <!-- ***** Main Banner Area End ***** -->
    <div class="social-icons">
        <ul>
            <li><a href="https://www.facebook.com/ktskillterengganu/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.tiktok.com/@ktskill_institute" target="_blank"><i class="fab fa-tiktok"></i></a></li>
            <li><a href="https://www.instagram.com/ktskill_institute/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
        </ul>
    </div>

    <section class="our-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>Tentang Kami</h2>
                            <h3 style = "font-size: 20px"> Sebuah institusi pengajian yang telah berdaftar dengan Jabatan Pembangunan Kemahiran, 
                                Kementerian Sumber Manusia, dalam menyediakan kursus pendidikan dan latihan teknikal dan vokasional (TVET) 
                                untuk para pelajar, sesuai dengan standard pekerjaan yang diiktiraf, dengan penekanan kepada komponen praktikal, 
                                kemahiran psikomotor dan pendedahan kepada latihan di industri. </h3>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="count-area-content percentage">
                                        <div class="count-digit">94</div>
                                        <div class="count-title">Kursus Ditawarkan</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="count-area-content">
                                        <div class="count-digit">126</div>
                                        <div class="count-title"> PENGAJAR BERKEMAHIRAN</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="count-area-content new-students">
                                        <div class="count-digit">2345</div>
                                        <div class="count-title">Jumlah Pelajar</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="video">
                        <img src="" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="upcoming-meetings" id="meetings">
        <div class="container">
            <div class="section-title">
             <h4>
              KURSUS
             </h4>
             <h2>
              Senarai Kursus Yang Menarik Ditawarkan
             </h2>
            </div>
            <div class="row">
             <div class="col-md-4">
                <div class="card" onclick="window.open('{{ url('/course/Pemasangan & Penyelenggaraan Elektrik - Satu Fasa') }}', '_blank')">
                    <img alt="Person installing an air conditioning unit" height="400" src="https://storage.googleapis.com/a1aa/image/ySrCcrsQIcr1E96aNz06eugsVobQOOqkGxayFKvOkQI48PEKA.jpg" width="600"/>
               <div class="card-title">
                PEMASANGAN &amp; PENYELENGGARAAN SATU FASA PENYAMAN UDARA,
               </div>
              </div>
             </div>
             <div class="col-md-4">
              <div class="card">
               <img alt="Machinery operation in a workshop" height="400" src="https://storage.googleapis.com/a1aa/image/tXukHMqB1LL7Klh1mwKlDosV4kNKM7WPBCbJiA9tKmScePEKA.jpg" width="600"/>
               <div class="card-title">
                OPERASI PEMESINAN
               </div>
              </div>
             </div>
             <div class="col-md-4">
              <div class="card">
               <img alt="Placeholder image for electrical maintenance course" height="400" src="https://storage.googleapis.com/a1aa/image/Y18UxqajTzrOLhBnlgfnu8l27sfDS7jUKVlzr16vPLfczfhQB.jpg" width="600"/>
               <div class="card-title">
                PEMASANGAN &amp; PENYELENGGARAAN ELEKTRIK - SATU FASA
               </div>
              </div>
             </div>
            </div>
           </div>
    </section>

    <section class="apply-now" id="apply">
        
    </section>

    <section class="our-courses" id="courses">
       
    </section>

@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const swiper = new Swiper('#eventSwiper', {
                loop: true, // Enables continuous loop mode
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                autoplay: {
                    delay: 3000, // 3 seconds
                    disableOnInteraction: false,
                },
                effect: 'fade', // Optional: Change effect to fade
            });
        });

        // Navigation and section highlighting
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
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

        var checkSection = function checkSection() {
            $('.section').each(function () {
                var $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                    var currentId = $this.data('section'),
                        reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                    reqLink.closest('li').addClass('active').siblings().removeClass('active');
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
