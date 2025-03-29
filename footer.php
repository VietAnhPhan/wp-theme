<div class="page-content secondary-color-bg section bg-0b3a94 text_white">
    <div class="flex container flex-wrap gap-30 row">
        <div class="footer__contact-info third-color flex-laptop-30 col-lg-4 col-12">
            <h5 class="footer__title text-xl title__decoration_border_bottom_left title__section-position_relative">THÔNG TIN LIÊN HỆ</h5>
            <p>CÔNG TY TNHH DỊCH VỤ BẢO VỆ VIỆT BẢO LONG</p>

            <p>T4/1M, khu phố Bình Thuận 2, Phường Thuận Giao, Thành phố Thuận An, Tỉnh Bình Dương, Việt Nam</p>

            <p>Hotline: 0966 673 288</p>

            <p>Website: <?php echo home_url(); ?></p>

            <p>Email: thanhtamht0302@gmail.com</p>
            <p>MST: 3703270485</p>
        </div>
        <div class="footer__services col-lg-4 col-12">
            <h5 class="third-color footer__title flex-laptop-30 text-xl title__decoration_border_bottom_left title__section-position_relative">
                DỊCH VỤ
            </h5>
            <ul class="footer__list">
                <?php
                $services = new WP_Query(array(
                    'post_type' => 'service',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                ));
                while ($services->have_posts()) {
                    $services->the_post(); ?>
                    <li class="footer__list-item"><a class="link text_white" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php }
                wp_reset_postdata();
                ?>
            </ul>

        </div>
        <div class="footer__fanpage col-lg-4 col-12">
            <h5 class="third-color footer__title flex-laptop-30 text-xl title__decoration_border_bottom_left title__section-position_relative">
                FANPAGE
            </h5>
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D61573532888901&tabs=timeline&width=340&height=70&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="auto" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            <ul class="gap-10 list-type-none social-media__list row footer__list">
                <li class="footer__icon"><a href="#" class="social-media__icon social-media__fb flex justify-content-center align-items-center icon__social-media_fb icon__social-media">
                        <i class="fa fa-facebook icon__social-media_white"></i></a></li>
                <li class="footer__icon"><a href="#" class="social-media__icon social-media__yt flex justify-content-center align-items-center icon__social-media_yt icon__social-media">
                        <i class="fa fa-youtube icon__social-media_white"></i>
                    </a></li>
                <li class="footer__icon"><a href="#" class="social-media__icon social-media__tiktok flex justify-content-center align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-tiktok.png" alt="Icon Tiktok">
                    </a></li>
                <li class="footer__icon"><a href="#" class="social-media__icon social-media__zalo flex justify-content-center align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/iconzalo.png" alt="Icon Zalo">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="footer__bottom">
    <div class="container row justify-between">
        <span>
            Copyright © 2021 Bản quyền thuộc về <?php $domain = parse_url(get_site_url(), PHP_URL_HOST);
                                                echo $domain;
                                                ?>
        </span>
        <span>Design By: WePro</span>
    </div>
</div>
<?php wp_footer(); ?>

<!-- <div class="contact__bubble">
    <a href="#" class="contact__bubble-zalo"><img class="contact__bubble-ring" src="<?php echo get_template_directory_uri(); ?>/assets/icons/iconzalo.png" alt="Zalo button"></a>
    <a href="tel:0966 673 288" class="d-flex align-items-center contact__bubble-phone contact__bubble-phone align-center">
        <div class="ring-alo-phone-circle"></div>
        <img class="contact__bubble-ring contact__bubble-icon-phone" src="<?php echo get_template_directory_uri(); ?>/assets/icons/goi.png" alt="Phone button">
        <span class="contact__bubble_phone-number">0966 673 288</span>
    </a>
</div> -->

<!-- <div class="contact__bar mobile flex">
    <a href="tel:0966 673 288" class="flex align-items-center flex-1 flex-col text-center p-10">

        <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/icons/goi.png" alt="Phone button">
        <span class="">Gọi ngay</span>
    </a>
    <a href="#" class="flex-1 flex-col align-items-center p-10"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/icons/iconzalo.png" alt="Zalo button">
    <span class="">Zalo</span>
</a>

</div> -->

</body>

</html>