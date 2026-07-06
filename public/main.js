$(document).ready(function() {
    
    // Mobile Menu Toggle (New Logic)
    $('#mobile-menu-btn').on('click', function() {
        $('#mobile-menu').toggleClass('hidden');
        // Toggle hamburger to close icon
        var icon = $(this).find('i');
        if (icon.hasClass('fa-bars')) {
            icon.removeClass('fa-bars').addClass('fa-xmark');
        } else {
            icon.removeClass('fa-xmark').addClass('fa-bars');
        }
    });

    // Close mobile menu on link click
    $('.mobile-link').on('click', function() {
        $('#mobile-menu').addClass('hidden');
        $('#mobile-menu-btn i').removeClass('fa-xmark').addClass('fa-bars');
    });

    // Sticky Header Scroll Effect
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 50) {
            $('#main-nav').addClass('shadow-md py-2').removeClass('py-4');
        } else {
            $('#main-nav').removeClass('shadow-md py-2').addClass('py-4');
        }
        
        // Scroll Reveal Animation
        reveal();
    });

    // Reveal elements on scroll
    function reveal() {
        var windowHeight = $(window).height();
        var elementVisible = 100;

        $('.reveal-up, .reveal-left').each(function() {
            var elementTop = $(this).offset().top;
            var scrollTop = $(window).scrollTop();
            
            if (elementTop < (scrollTop + windowHeight - elementVisible)) {
                $(this).addClass('active');
            }
        });
    }

    // Trigger reveal on load
    reveal();
    
    // Smooth scrolling for navigation links
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var target = this.hash;
        var $target = $(target);
        
        if ($target.length) {
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - 70 // Offset for sticky header
            }, 500, 'swing', function() {
                // window.location.hash = target; // Disabled to prevent local file:// protocol CORS errors
            });
            
            // Close mobile menu if open
            if(window.innerWidth < 768) {
                 $('nav').addClass('hidden').removeClass('flex flex-col absolute top-full left-0 w-full bg-white/95 backdrop-blur-md shadow-md p-6 space-y-4 space-x-0 border-t border-gray-100');
            }
        }
    });

});
