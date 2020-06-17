<?php get_header(); ?>
    <script>
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
    </script>
    <section class="page1">
        <div class="page-container">

        </div>
    </section>

    <section class="page2">
        <div class="page-container">

        </div>
    </section>

    <section class="page3">
        <div class="page-container">

        </div>
    </section>
<?php get_footer(); ?>