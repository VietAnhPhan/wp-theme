<div class="page-content secondary-color-bg">
    <div class="flex container flex-wrap gap-30">
        <div class="footer__contact-info third-color flex-laptop-30">
            <h5 class="footer__title">THÔNG TIN LIÊN HỆ</h5>
            <p>CÔNG TY CỔ PHẦN DỊCH VỤ BẢO VỆ VIỆT BẢO LONG</p>

            <p>Địa chỉ: 111/11 Nguyễn Văn X, Phường 6, Quận Bình Thạnh, TPHCM.</p>

            <p>Hotline: (028) 5555 2222 – 1111 111 111</p>

            <p>Website: <?php echo home_url(); ?></p>

            <p>Email: info.vietbaonlong@gmail.com</p>
        </div>
        <div class="footer__services">
            <h5 class="third-color footer__title flex-laptop-30">
                DỊCH VỤ
            </h5>
            <ul class="footer__services-list">
                <li class="flex align-items-center"><a href="#">Dịch vụ bảo vệ mục tiêu cố định</a></li>
                <li><a href="#">Dịch vụ bảo vệ mục tiêu di động</a></li>
                <li><a href="#">Cung cấp và lắp đặt thiết bị an ninh</a></li>
                <li><a href="#">Dịch vụ khác</a></li>
            </ul>

        </div>
        <div class="footer__fanpage">
            <h5 class="third-color footer__title flex-laptop-30">
                FANPAGE
            </h5>
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D61573532888901&tabs=timeline&width=340&height=70&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="auto" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            <ul class="gap-10 list-type-none social-media__list flex">
                <li><a href="#" class="social-media__icon social-media__fb flex justify-content-center align-items-center">
                        <i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="social-media__icon social-media__yt flex justify-content-center align-items-center">
                        <i class="fa fa-youtube"></i>
                    </a></li>
                <li><a href="#" class="social-media__icon social-media__tiktok flex justify-content-center align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-tiktok.png" alt="Icon Tiktok">
                    </a></li>
                <li><a href="#" class="social-media__icon social-media__zalo flex justify-content-center align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/iconzalo.png" alt="Icon Zalo">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="footer__bottom">
    <div class="container">
        <span>
            Copyright © 2021 Bản quyền thuộc về <?php $domain = parse_url(get_site_url(), PHP_URL_HOST);
                                                echo $domain;
                                                ?>
        </span>
    </div>
</div>
<?php wp_footer(); ?>

<div class="contact__bubble">
    <a href="#" class="contact__bubble-zalo"><img class="contact__bubble-ring" src="<?php echo get_template_directory_uri(); ?>/assets/icons/iconzalo.png" alt="Zalo button"></a>
    <a href="tel:0966 673 288" class="flex align-items-center contact__bubble-phone">
        <div class="ring-alo-phone-circle"></div>
        <img class="contact__bubble-ring" src="<?php echo get_template_directory_uri();?>/assets/icons/goi.png" alt="Phone button">
        <span class="contact__bubble_phone-number">0966 673 288</span>
    </a>
</div>
</body>

</html>