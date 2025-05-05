$(document).ready(function() {
    $('.menu-toggle').on('click', function() {
        $(this).toggleClass('active'); 
        $('.mega-menu').toggleClass('active'); 
        $('html').toggleClass('no-scroll');
    });


    const $slider = $('.list_partner');
    let isDown = false;
    let startX;
    let scrollLeft;

    $slider.on('mousedown', function(e) {
        isDown = true;
        $(this).addClass('grabbing');
        startX = e.pageX - $(this).offset().left;
        scrollLeft = $(this).scrollLeft();
    });

    $slider.on('mouseleave mouseup', function() {
        isDown = false;
        $(this).removeClass('grabbing');
    });

    $slider.on('mousemove', function(e) {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - $(this).offset().left;
        const walk = (x - startX) * 2; // Scroll speed multiplier
        $(this).scrollLeft(scrollLeft - walk);
    });
});
