<?php
get_header();
?>
<div class="page-banner overlay-black-middle">
    <div class="container">
        <h1 class="text-white position-relative z-2 capitalize"><?php the_title(); ?></h1>
    </div>
</div>
<div class="container">
    <?php
     while (have_posts()) {
        the_post(); ?>

        <div class="post__info">
            <div class="post-excerpt">
                <?php echo get_the_content(); ?>

            </div>
        </div>

    <?php } ?>
</div>
<div class="container flex gap-30 page-content container flex gap-30">
    <div class="flex-40">
        <div class="contact-page__box  p-20">
            <h5 class="flex align-items-center gap-10 fs-md mt-0"><i class="fa-solid fa-location-dot"></i>THÔNG TIN LIÊN HỆ</h5>
            <p>CÔNG TY TNHH DỊCH VỤ BẢO VỆ VIỆT BẢO LONG</p>
            <p>Địa chỉ: T4/1M, khu phố Bình Thuận 2, Phường Thuận Giao, Thành phố Thuận An, Tỉnh Bình Dương, Việt Nam</p>
            <p>Hotline: 0966 673 288</p>
            <p>Website: baovevietbaolong.com</p>
            <p>Email: thanhtamht0302@gmail.com</p>
        </div>
    </div>
    <div class="flex-60">

        <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" class="flex-col gap-25 contact-page__form" method="POST">
            <input type="hidden" name="action" value="custom_form_submission">
            <h3 class="fs-l mt-0">GỬI THÔNG TIN TƯ VẤN</h3>
            <div class="flex gap-30 flex-wrap">
                <input class="contact-page__form__input" type="text" name="fullname" id="hoten" placeholder="Họ tên" required>
                <input class="contact-page__form__input" type="tel" name="mobile_phone" id="sdt" placeholder="Điện thoại" required>
            </div>
            <input class="contact-page__form__input" type="email" name="email" id="email" placeholder="Email" required>
            <input class="contact-page__form__input" type="text" name="address" id="địa chỉ" placeholder="Địa chỉ">
            <textarea class="contact-page__form__input" name="message_content" id="message" cols="30" rows="10" placeholder="Nội dung"></textarea>
            <button class="btn primary-color-bg third-color">Gửi yêu cầu</button>
        </form>

    </div>

</div>

<?php
get_footer();
?>

<?php
get_footer();
?>