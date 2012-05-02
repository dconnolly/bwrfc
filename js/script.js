(function($) {

    /* Hover over nav to trigger dropdown */
    $('li.dropdown').hover(
        function() {
            $(this).toggleClass('open');
        }
    );

    /* Activate slides.js on #slides if present. */
    $("#slides").slides({
        responsive: true,
        play: 5000,
        playInterval: 5000,
        navigation: false,
        pagination: false,
        startAtSlide: 5,
        preload: {
            active: true
        },
        effects: {
            play: "fade"
        },
        fade: {
            interval: 1000
        }
    }).slides("play");

})(jQuery);