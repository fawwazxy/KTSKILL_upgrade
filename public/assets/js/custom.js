(function ($) {
    "use strict";

    // Header Background Toggle on Scroll


    // Filter Functionality
    if ($('.filters ul li').length) {
        $('.filters ul li').click(function () {
            $('.filters ul li').removeClass('active');
            $(this).addClass('active');

            var filterValue = $(this).attr('data-filter');
            $('.grid').isotope({
                filter: filterValue
            });
        });

        $('.grid').isotope({
            itemSelector: '.all',
            percentPosition: true,
            masonry: {
                columnWidth: '.all'
            }
        });
    }

    // Accordion Functionality
    const Accordion = {
        settings: {
            firstExpanded: false,
            toggle: false
        },

        init: function (container) {
            const isFirstExpanded = container.classList.contains('is-first-expanded') || this.settings.firstExpanded;
            const isToggle = container.classList.contains('is-toggle') || this.settings.toggle;

            const sections = container.getElementsByClassName('accordion');
            const toggles = container.getElementsByClassName('accordion-head');
            const contents = container.getElementsByClassName('accordion-body');

            for (let i = 0; i < toggles.length; i++) {
                const toggle = toggles[i];
                const content = contents[i];

                toggle.addEventListener('click', () => {
                    if (!isToggle) {
                        Array.from(contents).forEach((otherContent, idx) => {
                            if (idx !== i) {
                                this.closeAccordion(toggles[idx], otherContent);
                            }
                        });
                    }

                    if (toggle.classList.contains('is-open')) {
                        this.closeAccordion(toggle, content);
                    } else {
                        this.openAccordion(toggle, content);
                    }
                });

                if (i === 0 && isFirstExpanded) {
                    this.openAccordion(toggle, content);
                }
            }
        },

        openAccordion: function (toggle, content) {
            toggle.classList.add('is-open');
            content.style.height = content.scrollHeight + 'px';
        },

        closeAccordion: function (toggle, content) {
            toggle.classList.remove('is-open');
            content.style.height = '0';
        }
    };

    document.querySelectorAll('.accordions').forEach(container => {
        Accordion.init(container);
    });

    // Owl Carousel Initialization
    if ($('.owl-service-item').length) {
        $('.owl-service-item').owlCarousel({
            items: 3,
            loop: true,
            dots: true,
            nav: true,
            autoplay: true,
            margin: 30,
            responsive: {
                0: { items: 1 },
                600: { items: 2 },
                1000: { items: 3 }
            }
        });
    }

    if ($('.owl-courses-item').length) {
        $('.owl-courses-item').owlCarousel({
            items: 4,
            loop: true,
            dots: true,
            nav: true,
            autoplay: true,
            margin: 30,
            responsive: {
                0: { items: 1 },
                600: { items: 2 },
                1000: { items: 4 }
            }
        });
    }

    // Smooth Scrolling for Anchor Links
    $('.scroll-to-section a[href^="#"]').on('click', function (e) {
        e.preventDefault();

        var target = $(this.hash);
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 80
            }, 700);
        }
    });

    // Page Preloader
    $(window).on('load', function () {
        if ($('#preloader').length) {
            $('#preloader').fadeOut(600);
        }
    });

    // Visibility Detection for Counters
    function isVisible(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
        );
    }

    $(window).scroll(function () {
        $('.count-digit').each(function () {
            if (isVisible(this) && !$(this).hasClass('counter-loaded')) {
                $(this).addClass('counter-loaded');

                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 3000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            }
        });
    });

})(jQuery);
s
