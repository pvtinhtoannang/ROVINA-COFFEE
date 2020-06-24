<?php
/**
 * Template Name: Tìm quán
 */
get_header();
$urlTheme = get_template_directory_uri();
get_template_part('templates/template-after-header');

?>
    <div class="template-find-shop">
        <div class="container">
            <!-- Nav pills -->
            <ul class="nav nav-pills tab-experience">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#tab1">DANH SÁCH QUÁN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#tab2">GOOGLE MAP</a>
                </li>

            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="tab1">
                    <div class="list-shop row">
                        <?php for ($i = 1; $i < 9; $i++): ?>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="news-item news-item-find-shop">
                                    <a href="#" title="" class="box-img">
                                        <img src="<?= $urlTheme ?>/assets/images/shop-<?= $i ?>.jpg" alt="">
                                    </a>
                                    <div class="box-information-experience">
                                        <h3 class="title text-center"><a href="#" title="Cafe Quang Trung">Cafe Quang Trung</a></h3>
                                        <div class="location-information">
                                            219 Phạm Phú Thứ, P.4, Quận 6, TP. Hồ Chí Minh
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                    <div class="pagination-wrapper">
                        <div class="wp-pagenavi d-flex justify-content-center flex-wrap" role="navigation">
                            <span class="pages">Trang 1 trên 3</span><span
                                aria-current="page" class="current">1</span><a class="page larger" title="Page 2"
                                                                               href="http://hiengiang.vn/san-pham/page/2/">2</a><a
                                class="page larger" title="Page 3" href="http://hiengiang.vn/san-pham/page/3/">3</a>
                            <a class="nextpostslink" rel="next"
                               href="http://hiengiang.vn/san-pham/page/2/">»</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab2">
                    <div class="google-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15715.674892591425!2d105.74685394725782!3d10.023565812360586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a08953f91c373b%3A0x26199ab8e4c5f69f!2sRovina%20Coffe!5e0!3m2!1svi!2s!4v1592897962830!5m2!1svi!2s"
                            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>


        </div>
    </div>
<?php
get_footer();
