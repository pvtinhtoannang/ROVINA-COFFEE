<?php
/**
 * Template Name: Về chúng tôi
 */
get_header();
$urlTheme = get_template_directory_uri();
get_template_part('templates/template-after-header');
?>

    <div class="template-about-us">
        <div class="container">
            <div
                class="top-about-us d-flex justify-content-between align-items-center flex-sm-wrap flex-xs-wrap justify-content-sm-center justify-content-xs-center">
                <div class="text-item text-item-left"
                     data-aos="fade-right"
                     data-aos-duration="1000"
                     data-aos-delay="300">
                    <h2 class="title-about-us text-uppercase text-sm-center">Sứ mệnh</h2>
                    <div class="description text-sm-center text-xs-center">
                        CÔNG TY TNHH CÀ PHÊ ROBUSTA VIỆT NAM - Thương hiệu ROVINA COFFEE thành lập 2014 ra đời với mong
                        muốn mang đến cho người tiêu dùng sản phẩm cà phê hạt rang xay sạch nguyên chất 100% và hương vị
                        đúng chất đầy quyến rũ, cùng những không gian thưởng thức cà phê ấn tượng, riêng biệt.
                    </div>
                </div>
                <div class="img-item text-center"
                     data-aos="fade-up"
                     data-aos-duration="1000"
                     data-aos-delay="300">
                    <img src="<?= $urlTheme ?>/assets/images/about-us-img-middle.png" alt="">
                </div>
                <div class="text-item text-item-right text-right"
                     data-aos="fade-left"
                     data-aos-duration="1000"
                     data-aos-delay="300">
                    <h2 class="title-about-us text-uppercase">Sứ mệnh</h2>
                    <div class="description text-sm-center text-xs-center">
                        ROVINA chuyên cung cấp các dịch vụ: sản xuất và xuất khẩu cà phê hạt rang xay nguyên chất 100%
                        chuyên cho pha phin và pha máy, setup quầy bar cà phê, đào tạo nhân viên pha chế, cung cấp máy
                        móc và nguyên liệu pha chế, tư vấn thiết kế, thi công quán cafe trọn gói.…
                    </div>
                </div>
            </div>

            <div class="bottom-about-us text-center">
                <h2 class="title-about-us text-uppercase text-center"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="300">CAM kết</h2>
                <div class="description"
                     data-aos="fade-up"
                     data-aos-duration="1000"
                     data-aos-delay="300">
                    Bằng tất cả tâm huyết của người sáng lập, sự nỗ lực của đội ngũ nhân viên giàu kinh nghiệm, luôn
                    luôn sáng tạo không ngừng, hệ thống máy móc thiết bị được đầu tư hiện đại, đồng bộ. ROVINA cam kết
                    đem đến những sản phẩm chất lượng và dịch vụ hoàn hảo nhất, tự tin mang lại sự hài lòng tuyệt đối
                    cho quý khách hàng.
                    <br>
                    Với Tầm nhìn trở thành nhà cung cấp hàng đầu các sản phẩm, dịch vụ. Không chỉ phân phối cho thị
                    trường trong nước mà còn hướng tới mục tiêu xuất khẩu sang thị trường Quốc Tế. ROVINA Luôn đảm bảo
                    về Uy Tín chất lượng sản phẩm mình cung cấp và đề cao phương châm “Uy Tín Khởi Nguồn Từ Chất Lượng”
                    làm kim chỉ nam cho mọi hoạt động. Sự tín nhiệm và đồng hành của Đối Tác và Quý Khách hàng trong
                    suốt thời gian qua chính là động lực to lớn để ROVINA tiếp tục cống hiến hơn nữa.
                    <br>
                    <p>
                        <strong>Chi tiết vui lòng truy cập website: rovinacoffee.com.vn hoặc hotline: 0946 888
                            179</strong>
                    </p>
                </div>
            </div>
        </div>
        <div class="bg-bottom"
             data-aos="fade-right"
             data-aos-duration="1000"
             data-aos-delay="300"></div>
    </div>
<?php
get_footer();