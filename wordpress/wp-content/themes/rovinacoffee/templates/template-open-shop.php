<?php
/**
 * Template Name: Mở quán
 */
get_header();
$urlTheme = get_template_directory_uri();
get_template_part('templates/template-after-header');
?>
    <section class="template-open-shop">
        <div class="container">
            <div class="content-form">
                <div class="content-form-sub">
                    <form class="content-open-shop template-get-coffee-machine">
                        <div class="title-legend text-center">
                            <h2 class="text-uppercase">ĐĂNG KÝ MỞ QUÁN - DÀNH CHO QUÁN ĐÃ KINH DOANH CÀ PHÊ</h2>
                            <p>Chỉ áp dụng tại quán thuộc Việt Nam</p>
                        </div>
                        <div class="row group-input-open-shop">
                            <div class="col-xs-12 col-sm-6">
                                <input type="text" class="input-type-2" value="" name="stt" placeholder="Tên quán">
                                <select class="input-type-2" name="" id="">
                                    <option value="">Thành phố Hồ Chí Minh</option>
                                    <option value="">Thành phố Cần Thơ</option>
                                </select>
                                <input type="text" placeholder="Họ và tên của chủ quán" class="input-type-2">

                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <input type="text" class="input-type-2" value="" name="stt" placeholder="Địa chỉ quán của bạn">
                                <select class="input-type-2" name="" id="">
                                    <option value="">Quận 3</option>
                                    <option value="">Quận 4</option>
                                </select>
                                <input type="text" placeholder="Họ và tên của chủ quán" class="input-type-2">
                            </div>
                            <div class="col-xs-12 col-sm-12">
                                <select class="input-type-2 select-type-shop" name="" id="" style="display: block">
                                    <option value="">Loại hình quán</option>
                                    <option value="">Loại 1</option>
                                    <option value="">Loại 2</option>
                                </select>
                            </div>
                        </div>

                        <div class="title-legend text-center">
                            <h2 class="text-uppercase">quy mô quán</h2>
                            <p>Ước tính trung bình đến hiện tại</p>
                        </div>
                        <div class="row group-input-open-shop">
                            <div class="col-xs-12 col-sm-4">
                                <input type="text" class="input-type-2" value="" name="stt" placeholder="Số bàn">
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <input type="text" class="input-type-2" value="" name="stt" placeholder="Số khách / ngày">
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <input type="text" class="input-type-2" value="" name="stt" placeholder="Số ly cà phê / ngày">
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <input type="text" placeholder="Loại cà phê đang dùng" class="input-type-2">
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <select class="input-type-2" name="" id="">
                                    <option value="">Họ và tên chủ quán</option>
                                    <option value="">Họ và tên chủ quán</option>
                                </select>

                            </div>
                            <div class="col-xs-12 col-sm-12">
                                <select class="input-type-2" name="" id="">
                                    <option value="">Vì sao biết đến Cà phê Rovina?</option>
                                    <option value="">Vì sao biết đến Cà phê Rovina?</option>
                                </select>

                            </div>
                        </div>
                        <button class="btn-submit"><span>ĐĂNG KÝ MỞ QUÁN</span></button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();