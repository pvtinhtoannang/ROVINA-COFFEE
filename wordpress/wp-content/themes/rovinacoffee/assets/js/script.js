jQuery(function ($) {
    try {
        // gsap.from(".sec-1 .cup", {duration: 2, x: 150, opacity: 0});
        // gsap.from(".sec-1 .machine", {duration: 2, x: -150, opacity: 0});
        $(document).ready(function () {
            let sec_1 = new TimelineLite();
            let sec_2 = new TimelineLite();
            let sec_3 = new TimelineLite();
            let sec_4 = new TimelineLite();
            let sec_5 = new TimelineLite();


            function sec_1_active() {
                sec_1.staggerFrom(".sec-1 .title", 0.5, {
                    y: 40,
                    opacity: 0,
                    autoAlpha: 0,
                    scale: 0.8,
                }, 0.1)
                    .add("act1", 0.4)
                    .from(".sec-1 .cup", 0.7, {
                        x: -70,
                        autoAlpha: 0,
                        scale: 0.9,
                    }, "act1")
                    .from(".sec-1 .sub-title", 0.7, {
                        y: 40,
                        opacity: 0,
                        autoAlpha: 0,
                        scale: 0.8,
                    }, "act1")
                    .from(".sec-1 .btn-wrapper", 0.7, {
                        y: 40,
                        opacity: 0,
                        rotation: 360,
                        autoAlpha: 0,
                        scale: 0.8,
                    }, "act1")
                    .from(".sec-1 .machine", 0.7, {
                        x: 70,
                        autoAlpha: 0,
                        scale: 0.9,
                    }, "act1")
                    .from(".sec-1 .flower", 0.6, {
                        autoAlpha: 0,
                        scale: .8,
                    })
                    .to(".sec-1 .flower", 80, {
                        rotation: 360,
                        repeat: -1,
                        ease: Linear.easeNone,
                        autoAlpha: 1,
                        scale: 1
                    })
            }

            function sec_2_active() {
                sec_2.staggerFrom(".sec-2 .title", 0.5, {
                    y: 40,
                    opacity: 0,
                    autoAlpha: 0,
                    scale: 0.8,
                }, 0.1)
                    .add("act2", 0.4)
                    .from(".sec-2 .rec-top img", 1, {
                        y: 427,
                        opacity: 0,
                        autoAlpha: 0,
                    }, "act2")
                    .staggerFrom(".sec-2 .sub-title", 0.5, {
                        y: 40,
                        opacity: 0,
                        autoAlpha: 0,
                        scale: 0.8,
                    }, 0.1, "act2")
                    .staggerFrom(".sec-2 .description", 0.5, {
                        y: 40,
                        opacity: 0,
                        autoAlpha: 0,
                        scale: 0.8,
                    }, 0.1, "act2")
                    .staggerFrom(".sec-2 .btn-wrapper", 0.5, {
                        y: 40,
                        opacity: 0,
                        autoAlpha: 0,
                        scale: 0.8,
                    }, 0.1, "act2")
                    .from(".sec-2 .rec-bottom img", 1, {
                        y: -427,
                        opacity: 0,
                        autoAlpha: 0,
                    }, "act2")
                    .from(".sec-2 .machine img", 0.4, {
                        autoAlpha: 0,
                        opacity: 0,
                    }, "act2")
            }

            function sec_3_active() {
                sec_3.staggerFrom(".sec-3 .title", 0.5, {
                    y: 40,
                    opacity: 0,
                    autoAlpha: 0,
                    scale: 0.8,
                }, 0.1)
                    .add("act3", 0.4)
                    .staggerFrom(".sec-3 .sub-title", 0.5, {
                        y: 40,
                        opacity: 0,
                        autoAlpha: 0,
                        scale: 0.8,
                    }, 0.1)
                    .staggerFrom(".sec-3 .number", 0.5, {
                        y: 40,
                        opacity: 0,
                        autoAlpha: 0,
                        scale: 0.8,
                    }, 0.1)
                    .staggerFrom(".sec-3 .text", 0.5, {
                        y: 40,
                        opacity: 0,
                        autoAlpha: 0,
                        scale: 0.8,
                    }, 0.1)
                    .from(".sec-3 .cup", 0.5, {
                        y: -300,
                        autoAlpha: 0,
                    }, "act3")
                    .from(".sec-3 .btn-wrapper", 0.5, {
                        y: -300,
                        autoAlpha: 0,
                        delay: 1
                    }, "act3")
            }

            function sec_4_active() {
                sec_4.staggerFrom(".sec-4 .title", 0.5, {
                    y: 40,
                    opacity: 0,
                    autoAlpha: 0,
                    scale: 0.8,
                }, 0.1)
                    .add("act4", 0.4)
                    .staggerFrom(".sec-4 .sub-title", 0.5, {
                        y: 40,
                        opacity: 0,
                        autoAlpha: 0,
                        scale: 0.8,
                    }, 0.1)
            }

            function sec_5_active() {
                sec_5.staggerFrom(".sec-5 .title", 0.5, {
                    y: 40,
                    opacity: 0,
                    autoAlpha: 0,
                    scale: 0.8,
                }, 0.1)
                    .add("act5", 0.4)
                    .staggerFrom(".sec-5 .sub-title", 0.5, {
                        y: 40,
                        opacity: 0,
                        autoAlpha: 0,
                        scale: 0.8,
                    }, 0.1)
                    .from(".sec-5 .btn-wrapper", 0.5, {
                        y: -300,
                        autoAlpha: 0,
                        delay: 1
                    }, "act5")
                    .from(".sec-5 .machine img", 0.4, {
                        autoAlpha: 0,
                        opacity: 0,
                        delay: 1
                    }, "act5")
            }

            if ($('.main').length) {
                sec_1_active();
                sec_2_active();
                sec_3_active();
                sec_4_active();
                sec_5_active();
                $(".main").onepage_scroll({
                    sectionContainer: "section",
                    responsiveFallback: 600,
                    loop: false,
                    easing: "ease",
                    animationTime: 1000,
                    pagination: true,
                    beforeMove: function (index) {
                        sec_1.restart();
                        sec_2.restart();
                        sec_3.restart();
                        sec_4.restart();
                        sec_5.restart();
                    },
                    afterMove: function (index) {

                        // if ($('section.sec-2').hasClass('active')) {
                        //     gsap.fromTo(".sec-2 .rec-top img", {y: 300, opacity: 0}, {
                        //         y: 0,
                        //         opacity: 1,
                        //         ease: "slow",
                        //         duration: 2
                        //     });
                        //     gsap.fromTo(".sec-2 .rec-bottom img", {y: -300, opacity: 0}, {
                        //         y: 0,
                        //         opacity: 1,
                        //         ease: "slow",
                        //         duration: 2
                        //     });
                        //     gsap.fromTo(".sec-2 .machine img", {y: -300, opacity: 0}, {
                        //         y: 0,
                        //         opacity: 1,
                        //         ease: "slow",
                        //         duration: 2
                        //     });
                        //     gsap.fromTo(".sec-2 .sec-2-content .title", {y: -300, opacity: 0}, {
                        //         y: 0,
                        //         opacity: 1,
                        //         ease: "slow",
                        //         duration: 2
                        //     });
                        //     gsap.fromTo(".sec-2 .sec-2-content .sub-title", {y: -300, opacity: 0}, {
                        //         y: 0,
                        //         opacity: 1,
                        //         ease: "slow",
                        //         duration: 2
                        //     });
                        //     gsap.fromTo(".sec-2 .sec-2-content .description", {y: 200, opacity: 0}, {
                        //         y: 0,
                        //         opacity: 1,
                        //         ease: "slow",
                        //         duration: 2
                        //     });
                        //     gsap.fromTo(".sec-2 .sec-2-content .btn-wrapper", {y: 300, opacity: 0}, {
                        //         y: 0,
                        //         opacity: 1,
                        //         ease: "slow",
                        //         duration: 2
                        //     });
                        // }
                        // if ($('section.sec-3').hasClass('active')) {
                        //     gsap.fromTo(".sec-3 .cup img", {y: 300, opacity: 0}, {
                        //         y: 0,
                        //         opacity: 1,
                        //         ease: "slow",
                        //         duration: 2
                        //     });
                        //     gsap.fromTo(".sec-3 .sec-3-content .title", {y: -300, opacity: 0}, {
                        //         y: 0,
                        //         opacity: 1,
                        //         ease: "slow",
                        //         duration: 2
                        //     });
                        //     gsap.fromTo(".sec-3 .sec-3-content .sub-title", {y: -300, opacity: 0}, {
                        //         y: 0,
                        //         opacity: 1,
                        //         ease: "slow",
                        //         duration: 2
                        //     });
                        //     gsap.fromTo(".sec-3 .sec-3-content .number", {y: -300, opacity: 0}, {
                        //         y: 0,
                        //         opacity: 1,
                        //         ease: "slow",
                        //         duration: 2
                        //     });
                        //     gsap.fromTo(".sec-3 .sec-3-content .text", {y: 300, opacity: 0}, {
                        //         y: 0,
                        //         opacity: 1,
                        //         ease: "slow",
                        //         duration: 2
                        //     });
                        //     gsap.fromTo(".sec-3 .sec-3-content .btn-wrapper", {y: 300, opacity: 0}, {
                        //         y: 0,
                        //         opacity: 1,
                        //         ease: "slow",
                        //         duration: 2
                        //     });
                        // }
                        // if ($('section.sec-4').hasClass('active')) {
                        //
                        //     gsap.fromTo(".sec-4 .cup img", {x: -300, opacity: 0}, {
                        //         x: 0,
                        //         opacity: 1,
                        //         ease: "slow",
                        //         duration: 2
                        //     });
                        //     gsap.fromTo(".sec-4 .machine img", {x: 300, opacity: 0}, {
                        //         x: 0,
                        //         opacity: 1,
                        //         ease: "slow",
                        //         duration: 2
                        //     });
                        //     gsap.fromTo(".sec-4 .flower img", {y: 300, opacity: 0}, {
                        //         y: 0,
                        //         opacity: 1,
                        //         ease: "slow",
                        //         duration: 2
                        //     });
                        //
                        //     gsap.fromTo(".sec-4 .sec-4-content .title", {y: 300, opacity: 0}, {
                        //         y: 0,
                        //         opacity: 1,
                        //         ease: "slow",
                        //         duration: 2
                        //     });
                        //     gsap.fromTo(".sec-4 .sec-4-content .sub-title", {y: 300, opacity: 0}, {
                        //         y: 0,
                        //         opacity: 1,
                        //         ease: "slow",
                        //         duration: 2
                        //     });
                        //
                        //     gsap.fromTo(".sec-4 .sec-4-content .btn-wrapper", {y: 300, opacity: 0}, {
                        //         y: 0,
                        //         opacity: 1,
                        //         ease: "slow",
                        //         duration: 2
                        //     });
                        // }
                        // if ($('section.sec-5').hasClass('active')) {
                        //     gsap.fromTo(".sec-5 .machine img", {y: 100, opacity: 0}, {
                        //         y: 0,
                        //         opacity: 1,
                        //         ease: "slow",
                        //         duration: 2
                        //     });
                        //     gsap.fromTo(".sec-5 .sec-5-content .title .title-left", {x: 300, opacity: 0}, {
                        //         x: 0,
                        //         opacity: 1,
                        //         ease: "slow",
                        //         duration: 2
                        //     });
                        //     gsap.fromTo(".sec-5 .sec-5-content .title .title-right", {x: -300, opacity: 0}, {
                        //         x: 0,
                        //         opacity: 1,
                        //         ease: "slow",
                        //         duration: 2
                        //     });
                        //     gsap.fromTo(".sec-5 .sec-5-content .sub-title", {y: 200, opacity: 0}, {
                        //         y: 0,
                        //         opacity: 1,
                        //         ease: "slow",
                        //         duration: 2
                        //     });
                        //     gsap.fromTo(".sec-5 .sec-5-content .btn-wrapper", {y: 250, opacity: 1}, {
                        //         y: 0,
                        //         opacity: 1,
                        //         ease: "slow",
                        //         duration: 2
                        //     });
                        // }
                    }
                });
            }
        });

        AOS.init();

        $('.btn-no').click(function () {
            $('.select-type-shop').css('display','none');
            $('.content-open-shop .title-legend h2').text('ĐĂNG KÝ MỞ QUÁN - DÀNH CHO QUÁN CHƯA KINH DOANH CÀ PHÊ');
        });
        $('.btn-yes').click(function () {
            $('.select-type-shop').css('display','block');
            $('.content-open-shop .title-legend h2').text('ĐĂNG KÝ MỞ QUÁN - DÀNH CHO QUÁN ĐÃ KINH DOANH CÀ PHÊ');
        });
    } catch (e) {
        console.log(e);
    }
});