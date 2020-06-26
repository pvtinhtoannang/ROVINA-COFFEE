<div
    class="template-after-header template-after-header-top  d-flex flex-column justify-content-center        <?php if (is_page('mo-quan')): ?> template-after-header-shop  <?php endif; ?>">
    <div class="logo-header text-center">
        <a href="/"><img src="<?= get_theme_file_uri('/assets/images/logo.png') ?>" alt=""></a>
    </div>
    <div class="page-title text-center">
        <h1 class="title text-uppercase text-center"><?= get_the_title() ?></h1>
        <?php if (is_page('hanh-trinh-cafe-pha-may')): ?>
            <div class="sub-title">
                CAFE PHA MÁY
            </div>
        <?php endif; ?>

        <?php if (is_page('mo-quan')): ?>
            <div class="sub-title">
                SỐ CỬA HÀNG ĐANG ĐĂNG KÝ KINH DOANH CAFE PHA MÁY
            </div>
            <div class="number">
                96
            </div>
        <?php endif; ?>
    </div>
</div>
<?php if (is_page('ve-chung-toi')): ?>
    <div class="template-after-header-bottom d-flex flex-column justify-content-center text-white">
        <p class="description text-center ">
            Mỗi người Việt Nam đều có quyền được thưởng thức <br>
            một ly cà phê nguyên bản đúng nghĩa sạch, ngon kiểu Việt.
        </p>
    </div>
<?php endif; ?>
<?php if (is_page('mo-quan')): ?>
    <div class="template-after-header-bottom-header-open-shop d-flex flex-column justify-content-center text-white">
        <p class="description text-center ">
            BẠN ĐANG KINH DOANH CÀ PHÊ?
        </p>
        <div class="list-button-question d-flex justify-content-center ">
            <button class="button-question">CÓ</button>
            <button class="button-question">KHÔNG</button>
        </div>
    </div>
<?php endif; ?>
