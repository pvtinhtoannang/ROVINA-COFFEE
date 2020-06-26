<?php
/**
 * Template Name: Sản phẩm
 */
get_header();
$urlTheme = get_template_directory_uri();
get_template_part('templates/template-after-header');

?>
    <section class="template-product">
        <div class="container">
            <div class="list-product row">
                <?php for ($i = 1; $i < 9; $i++): ?>
                    <div class="product-item col-xs-12 col-sm-6 col-md-3"
                         data-aos="fade-up"
                         data-aos-duration="1000"
                         data-aos-delay="<?= $i * 1 ?>00">
                        <div class="information-product text-center">
                            <div class="box-img">
                                <a href="#">
                                    <img src="<?= $urlTheme ?>/assets/images/product-item-<?= $i ?>.jpg" alt="">
                                </a>
                            </div>
                            <div class="information">
                                <h3 class="title"><a href="#">Cafe Rovina123</a></h3>
                                <p class="description">25.000 <sup>đ</sup>/100g</p>
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
    </section>

<?php
get_template_part('templates/template-get-coffee-machine');
get_footer();
