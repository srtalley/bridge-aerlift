//version: 1.0
jQuery(function($) {
    $(document).ready(function() {

        
    });

    $(window).load(function() {
        //Scrolling animation for anchor tags
        if (window.location.hash) {
            smooth_scroll_to_anchor_top($(window.location.hash));
        }
    }); // end window load 

    //check if an anchor was clicked and scroll to the proper place
    $('a[href*=\\#]').on('click', function() {
        if (this.hash != '') {
            if (this.pathname === window.location.pathname) {
                smooth_scroll_to_anchor_top($(this.hash));
            }
        }
    });
    // scroll to the top of the anchor with an offset on desktops
    function smooth_scroll_to_anchor_top(anchor) {
        console.log(anchor);
        if ($(anchor) != 'undefined') {
            var window_media_query_980 = window.matchMedia("(max-width: 980px)")
            if (window_media_query_980.matches) {
                var offset_amount = 0;
            } else {
                // var top_banner_height = $('.mtsnb-container-outer').first().height();
                var main_header_height = $('header.centered_logo.page_header').first().height();
                var admin_bar_height = $('#wpadminbar').height();

                var offset_amount = main_header_height + admin_bar_height;

            }
            $('html,body').animate({ scrollTop: ($(anchor).offset().top - offset_amount) + 'px' }, 1000);
        }
    } // end function
});