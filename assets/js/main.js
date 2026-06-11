/**
 * Theme Custom Frontend Script Engine
 * Prefix Controls: dpt-
 * All features fully functional without placeholders.
 */
(function ($) {
    "use strict";
    
    var $window = $(window); 
    var $body = $('body'); 

    /* ========================================== */
    /* 1. STICKY HEADER PIPELINE                  */
    /* ========================================== */
    if ($('.active-sticky-header').length) {
        
        // Define isolated height calculation engine
        var dptSetHeaderHeight = function() {
            var $stickyTarget = $('header.active-sticky-header .header-sticky');
            if ($stickyTarget.length) {
                $("header.active-sticky-header").css("height", $stickyTarget.outerHeight());
            }
        };

        // Trigger layout calculation on resize routines
        $window.on('resize.dptHeader', function() {
            dptSetHeaderHeight();
        });
    
        // Handle scroll orchestration
        $window.on("scroll.dptHeader", function() {
            var fromTop = $window.scrollTop();
            var $stickyHeader = $("header.active-sticky-header .header-sticky");
            
            // Dynamically check the top-header height if present, otherwise default to 50px
            var topHeaderHeight = $('.top-header').outerHeight() || 50;
            
            // As soon as the page scrolls past the top-header bar, stick the menu
            if (fromTop > topHeaderHeight) {
                dptSetHeaderHeight(); // Prevent the content below from jumping
                $stickyHeader.addClass("active");
            } else {
                $stickyHeader.removeClass("active");
                $("header.active-sticky-header").css("height", "auto"); // Reset height fallback
            }
        });
    }
    
    /* ========================================== */
    /* 2. SLICK NAV MOBILE NAVIGATION             */
    /* ========================================== */
    if ($('.nav-menu-wrapper').length) {
        $('.nav-menu-wrapper').slicknav({
            label : '',
            prependTo : '.responsive-menu',
            duration: 300,
            allowParentLinks: true
        });
    }

    /* ========================================== */
    /* 3. SMOOTH SCROLL TO TOP                    */
    /* ========================================== */
    if ($("a[href='#top']").length) {
        $(document).on("click", "a[href='#top']", function(e) {
            e.preventDefault();
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
        });
    }

    /* ========================================== */
    /* 4. SWIPER CAROUSEL SYSTEMS                 */
    /* ========================================== */
    
    // Testimonial Standard Slider Engine
    if ($('.testimonial-slider').length) {
        new Swiper('.testimonial-slider .swiper', {
            slidesPerView : 1,
            speed: 1500,
            spaceBetween: 40,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1300: {
                    slidesPerView: 3,
                }
            },
            navigation: {
                nextEl: '.testimonial-button-next',
                prevEl: '.testimonial-button-prev',
            },
        });
    }

    // Testimonial Royal Slider Engine
    if ($('.testimonial-slider-royal').length) {
        new Swiper('.testimonial-slider-royal .swiper', {
            slidesPerView : 1,
            speed: 1500,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            breakpoints: {
                768: {
                    slidesPerView: 1,
                },
                1300: {
                    slidesPerView: 2,
                }
            }
        });
    }
    
    /* ========================================== */
    /* 5. LINEAR SKILL BARS RUNTIME               */
    /* ========================================== */
    if ($('.skills-progress-bar').length && typeof $.fn.waypoint !== 'undefined') {
        $('.skills-progress-bar').waypoint(function() {
            $('.skillbar').each(function() {
                var $this = $(this);
                var percentValue = $this.attr('data-percent');
                $this.find('.count-bar').animate({
                    width: percentValue
                }, 2000);
            });
        }, {
            offset: '70%'
        });
    }

    /* ========================================== */
    /* 6. COUNTER UP ENGINE                       */
    /* ========================================== */
    if ($('.counter').length && typeof $.fn.counterUp !== 'undefined') {
        $('.counter').counterUp({ 
            delay: 6, 
            time: 3000 
        });
    }
    
    /* ========================================== */
    /* 7. MAGNIFIC POPUP INTERACTION              */
    /* ========================================== */
    if ($('.gallery-items').length && typeof $.fn.magnificPopup !== 'undefined') {
        $('.gallery-items').magnificPopup({
            delegate: 'a',
            type: 'image',
            closeOnContentClick: false,
            closeBtnInside: false,
            mainClass: 'mfp-with-zoom mfp-img-mobile',
            image: {
                verticalFit: true,
            },
            gallery: {
                enabled: true
            },
            zoom: {
                enabled: true,
                duration: 300, 
                opener: function(element) {
                    return element.find('img');
                }
            }
        });
    }

    // Magnific Popup Video Content Modals
    if ($('.popup-video').length && typeof $.fn.magnificPopup !== 'undefined') {
        $('.popup-video').magnificPopup({
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: true
        });
    }

    /* ========================================== */
    /* 8. RADIAL CIRCLE PROGRESS ENGINE           */
    /* ========================================== */
    if ($('.circle').length && typeof $.fn.circleProgress !== 'undefined' && typeof Waypoint !== 'undefined') {   
        $('.circle').each(function() {          
            var $el = $(this);
            var rawValue = $el.data('value'); 
            var progressValue = parseFloat(rawValue);
            
            // Validate bounding constraint values safely
            if (isNaN(progressValue)) { progressValue = 0; }
            if (progressValue > 1) { progressValue = 1; }
            if (progressValue < 0) { progressValue = 0; }
            
            // Safely compute native runtime styling tokens
            var computedColor = '#0073aa'; // Fallback setup fallback
            if ($el[0]) {
                computedColor = window.getComputedStyle($el[0]).color || computedColor;
            }

            var progressBarOptions = {
                value: 0, // Initialize explicitly empty for animation triggers
                startAngle: -1.6,
                thickness: 3,
                fill: {
                    color: computedColor
                }
            };

            // Instantiate structural runtime pipeline hooks via Waypoints
            new Waypoint({
                element: $el.get(0),
                handler: function() {
                    $el.circleProgress($.extend({}, progressBarOptions, {
                        value: progressValue  
                    })).on('circle-animation-progress', function(event, progress, stepValue) {
                        var displayValue = Math.round(stepValue * 100); 
                        $el.find('.progress_value .pro_data').text(displayValue);
                    });
                        
                    this.destroy(); // Prevent memory leaks on loop completions
                },
                offset: '80%'
            });         
        });     
    }

})(jQuery);