jQuery(function ($) {
    try {
        $(document).ready(function () {
            if ($('.main').length) {
                $(".main").onepage_scroll({
                    sectionContainer: "section",
                    responsiveFallback: 600,
                    loop: false
                });
            }
            $('.counter').countUp({
                'time': 2000,
                'delay': 10
            });
        });
    } catch (e) {
        // console.log(e);
    }
});