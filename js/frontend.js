(function ($) {

    "use strict";

    var cHeader = 'body .vslide';
    var cHeaderEl = $(cHeader);
    var cHeaderCurrnet;

    function creativeHeader() {

        $('.them-menu-toggle').click(function (e) {
            e.preventDefault();

            cHeaderEl.addClass('active');
            $('.them-menu-toggle', cHeaderEl).fadeOut(500);
            /*$('.them-menu-toggle, .creative-social', cHeaderEl).fadeOut(500);*/

        });

    }
    creativeHeader();

    $(document).on('mouseenter', cHeader, function () {
        cHeaderCurrnet = 1;
    });

    $(document).on('mouseleave', cHeader, function () {
        cHeaderCurrnet = null;
        setTimeout(function () {
            if (!cHeaderCurrnet) {

                cHeaderEl.removeClass('active');
                $('.them-menu-toggle', cHeaderEl).fadeIn(500);
                /*$('.them-menu-toggle, .creative-social', cHeaderEl).fadeIn(500);*/

            }
        }, 1000);
    });

})(jQuery);