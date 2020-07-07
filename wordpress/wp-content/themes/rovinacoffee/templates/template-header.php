<header class="header-wrapper">
    <div class="container-fluid">
        <div class="header-container">
            <div class="left-header">
                <?php if (is_home()): ?>
                    <div class="logo-wrapper">
                        <a href=""><img src="<?= get_theme_file_uri('/assets/images/logo.png') ?>" alt=""></a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="right-header">
                <div class="place">
                    <?php if (is_home()): ?>
                        Bạn đang ở: <strong class="text-uppercase"><?= 'Trang chủ' ?></strong>
                    <?php else: ?>
                        Bạn đang ở: <strong class="text-uppercase"><?= get_the_title() ?></strong>
                    <?php endif; ?>
                </div>
                <div class="btn-nav" id="trigger-overlay">
                    <span>Menu</span>
                    <div class="line line1"></div>
                    <div class="line line2"></div>
                </div>
            </div>
        </div>
    </div>
    <?php global $detect;?>
    <div class="overlay overlay-hugeinc <?php if($detect->isMobile()): ?> open <?php endif;?>">
        <button type="button" class="overlay-close">Close</button>
        <nav>
            <div class="logo-nav">
                <a href=""><img src="<?= get_theme_file_uri('/assets/images/logo-2.png') ?>" alt=""></a>
            </div>
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li><a href="/ve-chung-toi">Về chúng tôi</a></li>
                <li><a href="/hanh-trinh-cafe-pha-may">Hành trình Cà phê</a></li>
                <li><a href="/goc-trai-nghiem">Góc trải nghiệm</a></li>
                <li><a href="/san-pham">Sản phẩm</a></li>
                <li><a href="/tim-quan">Tìm quán</a></li>
                <li><a href="/mo-quan">Mở quán</a></li>
            </ul>
        </nav>
    </div>
</header>
