(function ($) {

    "use strict";

    var cHeader = 'body .vslide';
    var cHeaderEl = $(cHeader);
    var cHeaderCurrent;

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
        cHeaderCurrent = 1;
    });

    $(document).on('mouseleave', cHeader, function () {
        cHeaderCurrent = null;
        setTimeout(function () {
            if (!cHeaderCurrent) {

                cHeaderEl.removeClass('active');
                $('.them-menu-toggle', cHeaderEl).fadeIn(500);
                /*$('.them-menu-toggle, .creative-social', cHeaderEl).fadeIn(500);*/

            }
        }, 1000);
    });
    
    
    function createSticky() {
        var sticky = $(".sticky-wrapper");
        if (typeof sticky != "undefined") {
            
            var offset = 0;
            if ( (typeof headerVars != "undefined") && (typeof headerVars.stickyOffset != "undefined") ){
                offset = headerVars.stickyOffset;
            }

            offset = parseInt(offset);
            var height = sticky.height();
            var win = $(window);

            win.on("scroll", function () {

                if (win.scrollTop() > (height + offset)) {
                    sticky.addClass("sticky-active");
                    $("#page .wrapper").css("padding-top", height + "px");
                } else {
                    if(win.scrollTop() < height){
                        sticky.removeClass("sticky-active");
                        $("#page .wrapper").css("padding-top", "");
                    }
                }
                
            });
        }
    }
    createSticky();
    

})(jQuery);