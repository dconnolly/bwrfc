jQuery(function($) {

    /* Hover over nav to trigger dropdown */
    $('li.dropdown').hover(
        function() {
            $(this).toggleClass('open');
        }
    );

});