<div class="template-after-header template-after-header-top  d-flex flex-column justify-content-center">
    <div class="logo-header text-center">
        <a href=""><img src="<?= get_theme_file_uri('/assets/images/logo.png') ?>" alt=""></a>
    </div>
    <div class="page-title text-center">
        <h1 class="title text-uppercase"><?= get_the_title() ?></h1>
        <div class="sub-title"></div>
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