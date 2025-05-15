$(document).ready(function() {
    $('.menu-toggle').on('click', function() {
        $(this).toggleClass('active'); 
        $('.mega-menu-toggle').toggleClass('active');
        $('html').toggleClass('no-scroll');
    });

    $('.search_icon').on('click', function(e) {
        e.preventDefault();
        $('.search_area').toggleClass('active');
        $('html').toggleClass('no-scroll');
    });

    $('.search_area .close-search').on('click', function () {
        $('.search_area').removeClass('active');
    });


    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        const target = $(this).attr('href');
        if ($(target).length) {
            const offsetTop = $(target).offset().top;
            const screenWidth = $(window).width();

            const scrollTo = screenWidth < 1200 ? offsetTop - 40 : offsetTop;

            $('html, body').animate({
                scrollTop: scrollTo
            }, 600);
        }
    });

    const partnerSwiper = new Swiper('.list_partner', {
        slidesPerView: 'auto',
        freeMode: true,
        mousewheel: true,
        grabCursor: true,
        spaceBetween: 50,
        loop: true,
    });
});
