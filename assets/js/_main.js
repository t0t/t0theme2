// $(document).ready(function() {
//     $('.jcarousel').jcarousel();
// });

(function($) {
    $(function() {



    $('.carousel__wrap')
        .on('jcarousel:create jcarousel:reload', function() {
            var element = $(this),
                width = element.innerWidth();

            if (width > 700) {
                width = width / 2;
            } else if (width < 700) {
                width = width;
            }

            element.jcarousel('items').css('width', width + 'px');
        })
        .jcarousel({
            // Your configurations options
        });

        
        $('.carousel__wrap').jcarouselAutoscroll({
            target: '+=3'
        });

        $('.carousel-control-prev')
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '-=1'
            });

        $('.carousel-control-next')
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '+=1'
            });

        $('.carousel-pagination')
            .on('jcarouselpagination:active', 'a', function() {
                $(this).addClass('active');
            })
            .on('jcarouselpagination:inactive', 'a', function() {
                $(this).removeClass('active');
            })
            .jcarouselPagination();





    });
})(jQuery);
