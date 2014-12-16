// $(document).ready(function() {
//     $('.jcarousel').jcarousel();
// });

(function($) {
    $(function() {


// Slider
$('.slider__item:nth-child(3)').addClass('current');

$('.slider__item__next').on('click', function (e) {

    e.preventDefault();

    if ($('.current').next().length === 0) {
        $('.slider__item').removeClass('current').first().addClass('current');
        return;
    }
    $('.current').removeClass('current').next().addClass('current'); 

});


$('.slider__item__prev').on('click', function (e) {
  
    e.preventDefault();

    if ($('.current').prev().length === 0) {
        $('.slider__item').removeClass('current').last().addClass('current');
        return;
    }
    $('.current').removeClass('current').prev().addClass('current');

});





    });
})(jQuery);
