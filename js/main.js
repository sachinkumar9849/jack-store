$(document).ready(function () {
    // Hero Slider Initialization
    $('.hero-slider').slick({
        dots: true,
        infinite: true,
        speed: 600,
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: true,
        appendDots: $('.hero-controls'),
        appendArrows: $('.hero-controls'),
        prevArrow: '<button type="button" class="slick-prev-custom"><i class="fas fa-arrow-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next-custom"><i class="fas fa-arrow-right"></i></button>'
    });

    // Mega Menu Hover Logic
    $('.btn-shop, .mega-menu').hover(
        function () { $('.mega-menu').stop(true, true).show(); },
        function () { $('.mega-menu').stop(true, true).hide(); }
    );

    // Category Slider Initialization
    $('.category-slider').slick({
        slidesToShow: 8,
        slidesToScroll: 2,
        infinite: false,
        arrows: true,
        prevArrow: $('.cat-prev'),
        nextArrow: $('.cat-next'),
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 6,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
        ]
    });

    // Testimonial Slider Initialization
    $('.testimonial-slider').slick({
        centerMode: true,
        centerPadding: '20%',
        slidesToShow: 1,
        infinite: true,
        arrows: true,
        prevArrow: $('.test-prev'),
        nextArrow: $('.test-next'),
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    centerPadding: '10%',
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    centerPadding: '0',
                    slidesToShow: 1,
                }
            }
        ]
    });
});


