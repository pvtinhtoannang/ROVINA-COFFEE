<?php
/**
 * Template Name: Góc trãi nghiệm
 */
get_header();
$urlTheme = get_template_directory_uri();
get_template_part('templates/template-after-header');

?>

    <div class="template-experience">
        <div class="container">
            <!-- Nav pills -->
            <ul class="nav nav-pills tab-experience">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#tab1">CAFE PHA MÁY VÀ TÔI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#tab2">HÀNH TRÌNH CAFE ROVINA</a>
                </li>

            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="tab1">
                    <div class="experience-top">
                        <div class="experience-top-item d-flex align-items-end justify-content-between flex-wrap">
                            <div class="experience-information">
                                <h2 class="title-experience text-uppercase"><a href="#" title=""
                                                                               class="color-experience">Lợi thế khi
                                        nhượng
                                        quyền thương hiệu ROVINA COFFEE</a></h2>
                                <p class="description">
                                    Lợi thế khi nhượng quyền thương hiệu ROVINA COFFEE Nhiều chủ đầu tư đã hỏi chúng tôi
                                    “nhượng quyền thương hiệu ROVINA COFFEE” so với việc thuê kiến trúc sư thiết kế quán
                                    mới sau đó tự học pha chế thì có gì khác nhau không? Chúng tôi muốn nhấn mạnh...
                                </p>
                                <a href="#" title="Xem thêm"
                                   class="viewmore d-flex justify-content-center align-items-center">XEM THÊM</a>
                            </div>
                            <div class="experience-image">
                                <a href="#" class="color-experience" title="Title">
                                    <img src="<?= $urlTheme ?>/assets/images/images-experience.jpg"
                                         alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab2">
                    <div class="experience-top">
                        <div class="experience-top-item d-flex align-items-end justify-content-between">
                            <div class="experience-information">
                                <h2 class="title-experience text-uppercase"><a href="#" title=""
                                                                               class="color-experience">Lợi thế khi
                                        nhượng
                                        quyền thương hiệu ROVINA COFFEE</a></h2>
                                <p class="description">
                                    Lợi thế khi nhượng quyền thương hiệu ROVINA COFFEE Nhiều chủ đầu tư đã hỏi chúng tôi
                                    “nhượng quyền thương hiệu ROVINA COFFEE” so với việc thuê kiến trúc sư thiết kế quán
                                    mới sau đó tự học pha chế thì có gì khác nhau không? Chúng tôi muốn nhấn mạnh...
                                </p>
                                <a href="#" title="Xem thêm"
                                   class="viewmore d-flex justify-content-center align-items-center">XEM THÊM</a>
                            </div>
                            <div class="experience-image">
                                <a href="#" class="color-experience" title="Title">
                                    <img src="<?= $urlTheme ?>/assets/images/images-experience.jpg"
                                         alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="list-news d-flex flex-wrap justify-content-between">
                <?php for ($i = 1; $i < 7; $i++): ?>
                    <div class="news-item news-item-experience">
                        <a href="#" title="" class="box-img">
                            <img src="<?= $urlTheme ?>/assets/images/news-experience-<?= $i ?>.jpg" alt="">
                        </a>
                        <div class="box-information-experience">
                            <h3 class="title"><a href="#" title="">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elittemp</a></h3>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                                Risus commod.
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
<?php
get_footer();