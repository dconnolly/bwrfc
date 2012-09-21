jQuery(function() {

    /* Hover over nav to trigger dropdown */
    $('nav > ul.nav > li.dropdown').click(
        function(event) {
            event.preventDefault();
            $parentDropdown = $(this).parent();
            $("li.dropdown.open").not($parentDropdown).removeClass('open');
            $parentDropdown.toggleClass('open');
        }
    );
    $('nav ul.dropdown').click(
        function(event) {
            event.stopPropagation();
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