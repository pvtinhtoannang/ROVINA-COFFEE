jQuery(function ($) {
    try {
        $(document).ready(function () {
            $(".main").onepage_scroll({
                sectionContainer: "section",
                responsiveFallback: 600,
                loop: false
            });
        });
    } catch (e) {
        // console.log(e);
    }
});