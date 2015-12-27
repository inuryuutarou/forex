$(document).ready(function () {

    $('.carousel.carousel-fade').on('slid.bs.carousel', function () {
        $(this).find('.item').hide();
        $(this).find('.item.active').fadeIn(1200,'easeOutSine');
    });

});
