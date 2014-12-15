// $(document).ready(function() {
//     $('.jcarousel').jcarousel();
// });

(function($) {
    $(function() {



    $('.next').on('click', function (e) {
    e.preventDefault();
  if ($('.current').next().length === 0) {
    $('.slider__slide').removeClass('current').first().addClass('current');
    return;
  }
  $('.current').removeClass('current').next().addClass('current');
     
});



$('.prev').on('click', function (e) {
  
    e.preventDefault();
  if ($('.current').prev().length === 0) {
    $('.slider__slide').removeClass('current').last().addClass('current');
    return;
  }
  $('.current').removeClass('current').prev().addClass('current');

});


    });
})(jQuery);
