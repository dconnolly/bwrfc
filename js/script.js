jQuery(function() {

    /* Hover over nav to trigger dropdown */
    $('ul.nav > li.dropdown > a').click(
        function(event) {
            event.preventDefault();
            $("li.dropdown.open").removeClass('open');
            $(this).parent().toggleClass('open');
        }
    );

    /* Activate slides.js on #slides if present. */
    var slidesPresent = $("#slides").length;
    if (slidesPresent > 0) {
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
    }

});