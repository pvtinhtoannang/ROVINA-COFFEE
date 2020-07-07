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
                        </div>
                        <div class="row group-input-open-shop">
                            <div class="col-xs-12 col-sm-6">
                                <input type="text" class="input-type-2" value="" name="stt" placeholder="Họ và tên">
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <input type="text" placeholder="Địa chỉ quán của bạn" class="input-type-2">
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <select class="input-type-2" name="" id="">
                                    <option value="">Tỉnh / Thành phố</option>
                                </select>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <select class="input-type-2" name="" id="">
                                    <option value="">Quận / Huyện</option>
                                    <option value="">Quận 4</option>
                                </select>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <input type="text" class="input-type-2" value="" name="stt" placeholder="Email">
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <input type="text" class="input-type-2" value="" name="stt" placeholder="Số điện thoại">
                            </div>
                        </div>

                        <div class="title-legend text-center">
                            <h2 class="text-uppercase">quy mô quán</h2>
                            <p>Ước tính trung bình đến hiện tại</p>
                        </div>
                        <div class="row group-input-open-shop">
                            <div class="col-xs-12 col-sm-12">
                                <select class="input-type-2 select-type-shop" name="" id="" style="display: block">
                                    <option value="">Loại hình quán</option>
                                    <option value="">Loại 1</option>
                                    <option value="">Loại 2</option>
                                </select>
                            </div>
                            <div class="col-xs-12 col-sm-6 dientich" style="display: none">
                                <input type="text" class="input-type-2" value="" name="stt" placeholder="Diện tích" >
                            </div>
                            <div class="col-xs-12 col-sm-4 soban1">
                                <input type="text" class="input-type-2" value="" name="stt" placeholder="Số bàn" >
                            </div>
                            <div class="col-xs-12 col-sm-12 select-type-shop-no" style="display: none">
                                <select class="input-type-2 " name="" id="" >
                                    <option value="">Loại hình quán</option>
                                    <option value="">Loại 1</option>
                                    <option value="">Loại 2</option>
                                </select>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <input type="text" class="input-type-2 select-type-shop" value="" name="stt" placeholder="Số khách / ngày"  style="display: block">
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <input type="text" class="input-type-2 select-type-shop" value="" name="stt" placeholder="Số ly cà phê / ngày"  style="display: block">
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <select class="input-type-2" name="" id="">
                                    <option value="">Chọn loại cà phê đang chùng</option>
                                    <option value=""></option>
                                </select>
                            </div>

                            <div class="col-xs-12 col-sm-6">
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