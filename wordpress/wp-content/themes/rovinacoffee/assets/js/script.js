jQuery(function ($) {
    try {
        gsap.from(".sec-1 .cup", {duration: 2, x: 150, opacity: 0});
        gsap.from(".sec-1 .machine", {duration: 2, x: -150, opacity: 0});
        gsap.from(".sec-1 .sec-1-content .title", {opacity: 0, rotationY: 360});
        $(document).ready(function () {
            if ($('.main').length) {
                $(".main").onepage_scroll({
                    sectionContainer: "section",
                    responsiveFallback: 600,
                    loop: false,
                    afterMove: function (index) {
                        if ($('section.sec-2').hasClass('active')) {
                            gsap.from(".sec-2 .rec-top img", {duration: 0.5, y: 300, opacity: 0, scale: 0.5});
                            gsap.from(".sec-2 .rec-bottom img", {duration: 1, y: -300, opacity: 0, scale: 0.5});
                            gsap.from(".sec-2 .rec-bottom .machine img", {
                                duration: 2,
                                y: -300,
                                opacity: 0,
                                scale: 0.5
                            });
                            gsap.from(".sec-2 .sec-2-content .title", {duration: 1, y: -300, opacity: 0, scale: 0.5});
                            gsap.from(".sec-2 .sec-2-content .sub-title", {
                                duration: 2,
                                y: -300,
                                opacity: 0,
                                scale: 0.5
                            });
                            gsap.from(".sec-2 .sec-2-content .description", {
                                duration: 3,
                                y: -300,
                                opacity: 0,
                                scale: 0.5
                            });
                            gsap.from(".sec-2 .sec-2-content .btn-wrapper", {
                                duration: 4,
                                y: -300,
                                opacity: 0,
                                scale: 0.5
                            });
                        }
                        if ($('section.sec-3').hasClass('active')) {
                            gsap.from(".sec-3 .cup img", {duration: 0.5, y: 300, opacity: 0, scale: 0.5});
                            gsap.from(".sec-3 .sec-3-content .title", {duration: 1, y: -300, opacity: 0, scale: 0.5});
                            gsap.from(".sec-3 .sec-3-content .sub-title", {
                                duration: 1.25,
                                y: -300,
                                opacity: 0,
                                scale: 0.5
                            });
                            gsap.from(".sec-3 .sec-3-content .number", {
                                duration: 1.5,
                                y: -300,
                                opacity: 0,
                                scale: 0.5
                            });
                            gsap.from(".sec-3 .sec-3-content .text", {duration: 2, y: -300, opacity: 0, scale: 0.5});
                            gsap.from(".sec-3 .sec-3-content .btn-wrapper", {
                                duration: 2.25,
                                y: -300,
                                opacity: 0,
                                scale: 0.5
                            });
                        }
                        if ($('section.sec-4').hasClass('active')) {
                            gsap.from(".sec-4 .cup img", {duration: 0.5, y: 300, opacity: 0, scale: 0.5});
                            gsap.from(".sec-4 .machine img", {duration: 1, y: 300, opacity: 0, scale: 0.5});
                            gsap.from(".sec-4 .flower img", {duration: 1.5, y: 300, opacity: 0, scale: 0.5});
                            gsap.from(".sec-4 .sec-4-content .title", {duration: 2, y: -300, opacity: 0, scale: 0.5});
                            gsap.from(".sec-4 .sec-4-content .sub-title", {
                                duration: 2.25,
                                y: -300,
                                opacity: 0,
                                scale: 0.5
                            });
                            gsap.from(".sec-4 .sec-4-content .number", {
                                duration: 2.5,
                                y: -300,
                                opacity: 0,
                                scale: 0.5
                            });
                            gsap.from(".sec-4 .sec-4-content .text", {duration: 2.5, y: -300, opacity: 0, scale: 0.5});
                            gsap.from(".sec-4 .sec-4-content .btn-wrapper", {
                                duration: 2.5,
                                y: -300,
                                opacity: 0,
                                scale: 0.5
                            });
                        }
                        if ($('section.sec-5').hasClass('active')) {
                            gsap.from(".sec-5 .machine img", {duration: 0.65, y: 300, opacity: 0, scale: 0.5});
                            gsap.from(".sec-5 .sec-5-content .title", {duration: 1, y: -300, opacity: 0, scale: 0.5});
                            gsap.from(".sec-5 .sec-5-content .sub-title", {
                                duration: 1.25,
                                y: -300,
                                opacity: 0,
                                scale: 0.5
                            });
                            gsap.from(".sec-5 .sec-5-content .btn-wrapper", {
                                duration: 1.7,
                                y: -300,
                                opacity: 0,
                                scale: 0.5
                            });
                        }
                    }
                });
            }
        });


    } catch (e) {
        // console.log(e);
    }
});