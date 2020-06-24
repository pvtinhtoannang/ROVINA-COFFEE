jQuery(function ($) {
    try {
        gsap.from(".sec-1 .cup", {duration: 2, x: 150, opacity: 0});
        gsap.from(".sec-1 .machine", {duration: 2, x: -150, opacity: 0});
        $(document).ready(function () {
            if ($('.main').length) {
                $(".main").onepage_scroll({
                    sectionContainer: "section",
                    responsiveFallback: 600,
                    loop: false,

                    afterMove: function (index) {
                        if ($('section.sec-2').hasClass('active')) {
                            gsap.fromTo(".sec-2 .rec-top img", {y: 300, opacity: 0}, {
                                y: 0,
                                opacity: 1,
                                ease: "slow",
                                duration: 2
                            });
                            gsap.fromTo(".sec-2 .rec-bottom img", {y: -300, opacity: 0}, {
                                y: 0,
                                opacity: 1,
                                ease: "slow",
                                duration: 2
                            });
                            gsap.fromTo(".sec-2 .machine img", {y: -300, opacity: 0}, {
                                y: 0,
                                opacity: 1,
                                ease: "slow",
                                duration: 2
                            });
                            gsap.fromTo(".sec-2 .sec-2-content .title", {y: -300, opacity: 0}, {
                                y: 0,
                                opacity: 1,
                                ease: "slow",
                                duration: 2
                            });
                            gsap.fromTo(".sec-2 .sec-2-content .sub-title", {y: -300, opacity: 0}, {
                                y: 0,
                                opacity: 1,
                                ease: "slow",
                                duration: 2
                            });
                            gsap.fromTo(".sec-2 .sec-2-content .description", {y: 200, opacity: 0}, {
                                y: 0,
                                opacity: 1,
                                ease: "slow",
                                duration: 2
                            });
                            gsap.fromTo(".sec-2 .sec-2-content .btn-wrapper", {y: 300, opacity: 0}, {
                                y: 0,
                                opacity: 1,
                                ease: "slow",
                                duration: 2
                            });
                        }
                        if ($('section.sec-3').hasClass('active')) {
                            gsap.fromTo(".sec-3 .cup img", {y: 300, opacity: 0}, {
                                y: 0,
                                opacity: 1,
                                ease: "slow",
                                duration: 2
                            });
                            gsap.fromTo(".sec-3 .sec-3-content .title", {y: -300, opacity: 0}, {
                                y: 0,
                                opacity: 1,
                                ease: "slow",
                                duration: 2
                            });
                            gsap.fromTo(".sec-3 .sec-3-content .sub-title", {y: -300, opacity: 0}, {
                                y: 0,
                                opacity: 1,
                                ease: "slow",
                                duration: 2
                            });
                            gsap.fromTo(".sec-3 .sec-3-content .number", {y: -300, opacity: 0}, {
                                y: 0,
                                opacity: 1,
                                ease: "slow",
                                duration: 2
                            });
                            gsap.fromTo(".sec-3 .sec-3-content .text", {y: 300, opacity: 0}, {
                                y: 0,
                                opacity: 1,
                                ease: "slow",
                                duration: 2
                            });
                            gsap.fromTo(".sec-3 .sec-3-content .btn-wrapper", {y: 300, opacity: 0}, {
                                y: 0,
                                opacity: 1,
                                ease: "slow",
                                duration: 2
                            });
                        }
                        if ($('section.sec-4').hasClass('active')) {

                            gsap.fromTo(".sec-4 .cup img", {x: -300, opacity: 0}, {
                                x: 0,
                                opacity: 1,
                                ease: "slow",
                                duration: 2
                            });
                            gsap.fromTo(".sec-4 .machine img", {x: 300, opacity: 0}, {
                                x: 0,
                                opacity: 1,
                                ease: "slow",
                                duration: 2
                            });
                            gsap.fromTo(".sec-4 .flower img", {y: 300, opacity: 0}, {
                                y: 0,
                                opacity: 1,
                                ease: "slow",
                                duration: 2
                            });

                            gsap.fromTo(".sec-4 .sec-4-content .title", {y: 300, opacity: 0}, {
                                y: 0,
                                opacity: 1,
                                ease: "slow",
                                duration: 2
                            });
                            gsap.fromTo(".sec-4 .sec-4-content .sub-title", {y: 300, opacity: 0}, {
                                y: 0,
                                opacity: 1,
                                ease: "slow",
                                duration: 2
                            });

                            gsap.fromTo(".sec-4 .sec-4-content .btn-wrapper", {y: 300, opacity: 0}, {
                                y: 0,
                                opacity: 1,
                                ease: "slow",
                                duration: 2
                            });
                        }
                        if ($('section.sec-5').hasClass('active')) {
                            gsap.fromTo(".sec-5 .machine img", {y: 100, opacity: 0}, {
                                y: 0,
                                opacity: 1,
                                ease: "slow",
                                duration: 2
                            });
                            gsap.fromTo(".sec-5 .sec-5-content .title .title-left", {x: 300, opacity: 0}, {
                                x: 0,
                                opacity: 1,
                                ease: "slow",
                                duration: 2
                            });
                            gsap.fromTo(".sec-5 .sec-5-content .title .title-right", {x: -300, opacity: 0}, {
                                x: 0,
                                opacity: 1,
                                ease: "slow",
                                duration: 2
                            });
                            gsap.fromTo(".sec-5 .sec-5-content .sub-title", {y: 200, opacity: 0}, {
                                y: 0,
                                opacity: 1,
                                ease: "slow",
                                duration: 2
                            });
                            gsap.fromTo(".sec-5 .sec-5-content .btn-wrapper", {y: 250, opacity: 1}, {
                                y: 0,
                                opacity: 1,
                                ease: "slow",
                                duration: 2
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