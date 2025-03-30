<?php
get_header();
?>



<div class="page__banner_no_image blog overlay__black">
    <div class="container">
        <h1 class="text_white text-capitalize"><?php the_title(); ?></h1>
    </div>
</div>


<div class="section">
    <div class="container">
        <?php
        get_template_part('template-parts/post-content');
        ?>

        <div class="row content-box_padding_top gap-sm-30">
            <div class="col-12 flex-40">
                <div class="content-box__contact-info  p-20">
                    <h5 class="d-flex align-center gap-10"><i class="fa-solid fa-location-dot"></i>THÔNG TIN LIÊN HỆ</h5>
                    <p>CÔNG TY TNHH DỊCH VỤ BẢO VỆ VIỆT BẢO LONG</p>
                    <p>Địa chỉ: T4/1M, khu phố Bình Thuận 2, Phường Thuận Giao, Thành phố Thuận An, Tỉnh Bình Dương, Việt Nam</p>
                    <p>Hotline: 0966 673 288</p>
                    <p>Website: baovevietbaolong.com</p>
                    <p>Email: thanhtamht0302@gmail.com</p>
                </div>
            </div>
            <div class="col-12 flex-60">
                <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" class="row contact-box__request-form" method="POST">
                    <input type="hidden" name="action" value="custom_form_submission">
                    <h3 class="fs-l mt-0">GỬI THÔNG TIN TƯ VẤN</h3>
                    <div class="d-flex gap-30 flex-wrap">
                        <input class="contact-form__request-form__input" type="text" name="fullname" id="hoten" placeholder="Họ tên" required>
                        <input class="contact-form__request-form__input" type="tel" name="mobile_phone" id="sdt" placeholder="Điện thoại" required>
                    </div>
                    <input class="contact-form__request-form__input" type="email" name="email" id="email" placeholder="Email" required>
                    <input class="contact-form__request-form__input" type="text" name="address" id="địa chỉ" placeholder="Địa chỉ">
                    <textarea class="contact-form__request-form__input" name="message_content" id="message" cols="30" rows="10" placeholder="Nội dung"></textarea>
                    <button class="btn button__request-form">Gửi yêu cầu</button>
                </form>
            </div>
        </div>

    </div>

</div>





<?php
get_footer();
?>

<?php
get_footer();
?>