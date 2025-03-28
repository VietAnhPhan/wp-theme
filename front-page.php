<?php
get_header();
?>

<?php echo do_shortcode('[metaslider id="156"]'); ?>
<!-- ===============6 LÝ DO ĐỂ CHỌN================ -->
<div class="li-do-chon-chung-toi content-inner opacity-full__section bg-F4FAFD section">
    <div class="container">
        <h2 class="text_blue text-center title__decoration_border_bottom title__section">6 LÝ DO ĐỂ CHỌN BẢO VỆ VIỆT BẢO LONG:</h2>
        <!-- <p class="text-color__white max-w700 margin-auto text-center m-bottom50">Dịch vụ bảo vệ VIỆT BẢO LONG chú trọng trong việc đào tạo đội ngũ cân bộ nhân viên bài bản và chuyên sâu, luôn đảm bảo mang tới cho quý khách hàng một đội ngũ bảo vệ chuyên nghiệp – tâm huyết với nghề</p> -->
    </div>
    <div class="row container align-center">
        <div class="flex-col flex-laptop col-lg-4 col-12">
            <div class="flex key-feature-card key-feature-card_margin-left">
                <div class="icon-content text-color__white key-feature-card__text">
                    <p class="fs-md text-bold key-feature-card__text_blue text-capitalize key-feature-card__text_md">Tiêu chuẩn chất lượng</p>
                    <p>Tiêu chuẩn chất lượng bảo vệ theo ISO 9001 - 2015</p>
                </div>
                <div class="icon key-feature-card__icon">
                    <img src="<?php echo get_template_directory_uri() . '/assets/icons/key-feature-card/standard-1.png'; ?>" alt="">
                </div>
            </div>


            <div class="flex key-feature-card">
                <div class="icon-content text-color__white key-feature-card__text">
                    <p class="fs-md text-bold key-feature-card__text_blue text-capitalize key-feature-card__text_md">Bảo hiểm trách nhiệm</p>
                    <p>Bảo hiểm trách nhiệm dân sự lên đến 10 tỷ đồng</p>
                </div>
                <div class="icon key-feature-card__icon">
                    <img src="<?php echo get_template_directory_uri() . '/assets/icons/key-feature-card/insurance-1.jpg'; ?>" alt="">
                </div>
            </div>


            <div class="flex key-feature-card key-feature-card_margin-left">
                <div class="icon-content text-color__white key-feature-card__text">
                    <p class="fs-md text-bold key-feature-card__text_blue text-capitalize key-feature-card__text_md">Trình độ chuyên môn</p>
                    <p>100% Đào tạo bài bản, chuyên nghiệp cho nhân viên</p>
                </div>
                <div class="icon key-feature-card__icon">
                    <img src="<?php echo get_template_directory_uri() . '/assets/icons/key-feature-card/specialist-1.png'; ?>" alt="">
                </div>
            </div>
        </div>


        <div class="flex-laptop col-lg-4 col-12">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/circle.png'; ?>" alt="">
        </div>


        <div class="flex-col flex-laptop col-lg-4 col-12">
            <div class="flex key-feature-card key-feature-card_margin-right">
                <div class="icon-content text-color__white key-feature-card__text">
                    <p class="fs-md text-bold key-feature-card__text_blue text-capitalize key-feature-card__text_md">Trang bị công nghệ</p>
                    <p>Miễn phí trang bị camera và máy tuần tra GS 6000 C</p>
                </div>
                <div class="icon key-feature-card__icon">
                    <img src="<?php echo get_template_directory_uri() . '/assets/icons/key-feature-card/camera-1.png'; ?>" alt="">
                </div>
            </div>


            <div class="flex key-feature-card">
                <div class="icon-content text-color__white key-feature-card__text">
                    <p class="fs-md text-bold key-feature-card__text_blue text-capitalize key-feature-card__text_md">Văn hoá công ty</p>
                    <p>Duy trì và phát triển văn hóa của khách hàng</p>
                </div>
                <div class="icon key-feature-card__icon">
                    <img src="<?php echo get_template_directory_uri() . '/assets/icons/key-feature-card/client2-1.png'; ?>" alt="">
                </div>
            </div>


            <div class="flex key-feature-card key-feature-card_margin-right">
                <div class="icon-content text-color__white key-feature-card__text">
                    <p class="fs-md text-bold key-feature-card__text_blue text-capitalize key-feature-card__text_md">Hỗ trợ tư vấn</p>
                    <p>Miễn phí tư vấn an ninh toàn diện cho khách hàng</p>
                </div>
                <div class="icon key-feature-card__icon">
                    <img src="<?php echo get_template_directory_uri() . '/assets/icons/key-feature-card/advisor-1.png'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ===============Dịch vụ bảo vệ việt bảo long================ -->
<div class="dich-vu-bao-ve content-inner opacity-full__section section">
    <div class="container">

        <h2 class="fs-xl main-color text-center uppercase title__decoration text-uppercase title__decoration_border_bottom text_blue title__section">Dịch vụ bảo vệ việt bảo long</h2>
        <!-- <p class="text-white text-center max-w700 margin-auto m-bottom50">Ban Lãnh đạo Bảo vệ việt bảo long® xin gửi tri ân sâu sắc đến toàn thể Quý khách hàng, Cán bộ nhân viên, và cộng đồng xã hội đã tin tưởng hợp tác, sẻ chia và cùng nhau làm nên tập thể việt bảo long® vững mạnh, đoàn kết như ngày nay</p> -->
    </div>

    <div class="dich-vu-bao-ve-items overflow-hidden row container">
        <?php
        $services = new WP_Query(array(
            'post_type' => 'service',
            'posts_per_page' => 6,
            'order' => 'ASC'
        ));
        while ($services->have_posts()) {
            $services->the_post(); ?>
            <div class="dich-vu-bao-ve-item bg-color-1 p-10 flex-sm-100 flex-laptop-20 slide carousel-item col-lg-4 service__item col-12">
                <a class="link text_blue" href="<?php the_permalink(); ?>">
                    <div class="service__item-image-container"><?php the_post_thumbnail("full", array('class' => 'service__item-image')); ?></div>
                    <p class="text-bold text-center"><?php the_title(); ?></p>
                </a>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
    <div class="container text-center"><button class="button_default"><a class="link text_white" href="/dich-vu">XEM THÊM</a></button></div>
    <!-- <div class="dich-vu-bao-ve-items overflow-hidden carousel" data-range="300" data-unit="px">
        <div class="carousel-track gap-30 d-flex">
            <?php
            $services = new WP_Query(array(
                'post_type' => 'service',
                'posts_per_page' => 9,
                'order' => 'ASC'
            ));
            while ($services->have_posts()) {
                $services->the_post(); ?>
                <div class="dich-vu-bao-ve-item bg-color-1 p-10 flex-sm-100 flex-laptop-20 slide carousel-item col-lg-4">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                        <p class="text-bold text-center"><?php the_title(); ?></p>
                    </a>
                </div>
            <?php }
            wp_reset_postdata();
            ?>
        </div>
        <div class="text-center flex justify-content-center gap-10 p-20">
            <button class="prev__dich-vu prev"><i class="fa-solid fa-arrow-left"></i></button>
            <button class="next__dich-vu next"><i class="fa-solid fa-arrow-right"></i></button>
        </div>
    </div> -->


</div>




<!-- ==============Báo giá dịch vụ bảo vệ======================= -->

<div class="bao-gia-dich-vu section bg-f2f2f7">
    <div class="container">
        <h2 class="text-uppercase title__decoration_border_bottom title__section text-center text_blue">Báo giá dịch vụ bảo vệ</h2>
        <div class="container bao-gia-dv row">
            <div class="glide__track" data-glide-el="track">
                <div class="glide__slides">
                    <?php
                    $servicePricings = new WP_Query(array(
                        'post_type' => 'service-pricing',
                        'posts_per_page' => 6,
                        'order' => 'ASC'
                    ));
                    while ($servicePricings->have_posts()) {
                        $servicePricings->the_post(); ?>
                        <div class="dich-vu-bao-ve-item glide__slide">
                            <div class="content-box__border_bottom_rounded content-box__background_white">
                                <a class="link text_blue" href="<?php the_permalink(); ?>">
                                    <div class="image-thumbnail-container"><?php the_post_thumbnail("full", array('class' => 'image-thumbnail image-thumbnail_hover')); ?></div>
                                    <p class="text-bold text-center content-box__title_padding"><?php the_title(); ?></p>
                                </a>
                            </div>
                        </div>
                    <?php }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>

            <!-- <div class="glide__arrows" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
                <button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
            </div> -->
        </div>
    </div>
</div>





<!-- =====================TIÊU CHÍ=========================== -->


<div class="tieuchi bg-f2f2f7 section" style="padding-top: 0;">
    <div class="container">
        <div class="tieuchi-convince text-center text-bold">
            <!-- <p class="text-white text-bold fs-l text_blue text-xl">Với hơn 10 năm kinh nghiệm trong nghề, việt bảo long cung cấp</p>
            <p class="main-color text-bold fs-xl text_blue text-2xl">DỊCH VỤ BẢO VỆ CHUYÊN NGHIỆP VỚI CHI PHÍ TỐI ƯU NHẤT</p> -->
        </div>
        <div class="tieuchi-wrapper row flex-wrap gap-laptop-2 container">
            <div class="col-lg-3 col-sm-6">
                <div class="fun-fact-card tieuchi__item flex-sm-100 flex-laptop flex-tablet-50 d-flex flex-column text-center">
                    <span class="icon fun-fact-card__background"><img class="fun-fact-card__icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/cups-1.png" alt=""></span>
                    <span class="number main-color text-bold fun-fact-card__milestone text-2xl counter" data-target="50">2000+</span>
                    <span class="description text-bold text-capitalize">nhân viên</span>
                    <!-- <i class="fa-solid fa-caret-down text-white"></i> -->
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="fun-fact-card tieuchi__item flex-sm-100 flex-laptop flex-tablet-50 d-flex flex-column text-center">
                    <span class="icon fun-fact-card__background"><img class="fun-fact-card__icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/cups-1.png" alt=""></span>
                    <span class="number main-color text-bold fun-fact-card__milestone text-2xl">1000+</span>
                    <span class="description text-bold text-capitalize">khách hàng</span>
                    <!-- <i class="fa-solid fa-caret-down text-white"></i> -->
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="fun-fact-card tieuchi__item flex-sm-100 flex-laptop flex-tablet-50 d-flex flex-column text-center">
                    <span class="icon fun-fact-card__background"><img class="fun-fact-card__icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/cups-1.png" alt=""></span>
                    <span class="number main-color text-bold fun-fact-card__milestone text-2xl">30+</span>
                    <span class="description text-bold text-capitalize">chi nhánh</span>
                    <!-- <i class="fa-solid fa-caret-down text-white"></i> -->
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="fun-fact-card tieuchi__item flex-sm-100 flex-laptop flex-tablet-50 d-flex flex-column text-center">
                    <span class="icon fun-fact-card__background"><img class="fun-fact-card__icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/cups-1.png" alt=""></span>
                    <span class="number main-color text-bold fun-fact-card__milestone text-2xl">10+</span>
                    <span class="description text-bold text-capitalize">năm kinh nghiệm</span>
                    <!-- <i class="fa-solid fa-caret-down text-white"></i> -->
                </div>
            </div>
        </div>

    </div>
</div>

<!-- ===============DỰ ÁN ĐÃ TRIỂN KHAI ========================= -->
<div class="section">
    <div class="container">
        <h2 class="text-center title__decoration text-uppercase title__decoration_border_bottom text_blue title__section">DỰ ÁN ĐÃ TRIỂN KHAI</h2>
        <div class="du-an position-relative">
            <div class="glide__track" data-glide-el="track">
                <div class="glide__slides">
                    <?php
                    $projects = new WP_Query(array(
                        'post_type' => 'project',
                        'posts_per_page' => 6,
                        'order' => 'ASC'
                    ));
                    while ($projects->have_posts()) {
                        $projects->the_post(); ?>
                        <div class="glide__slide">
                            <a class="link text_blue" href="<?php the_permalink(); ?>">
                                <div class="project-card overlay__blue"><?php the_post_thumbnail("full", array('class' => 'image-thumbnail image-thumbnail_height_330')); ?>
                                    <div class="project-card__content_absolute">
                                        <p class="text_white text-medium">
                                            <?php the_title(); ?></p>
                                        <a class="button__project_read link text_blue" href="<?php the_permalink(); ?>">Xem thêm</a>
                                    </div>
                                </div>

                            </a>
                        </div>
                    <?php }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <div class="glide__bullets slider__bullets" data-glide-el="controls[nav]">
                <button class="glide__bullet" data-glide-dir="=0"></button>
                <button class="glide__bullet" data-glide-dir="=1"></button>
                <button class="glide__bullet" data-glide-dir="=2"></button>
            </div>

        </div>

    </div>

</div>

<!-- ===================SỨ MỆNH============================= -->


<div class="su-menh bg-color-3 section">
    <div class="container row align-items-center gap-10 content-inner flex-wrap align-center">
        <div class="flex-laptop left-hidden__section col-sm-6 col-12">
            <h2 class="text-bold main-color uppercase text_blue title__decoration_border_bottom_left title__section text-uppercase">SỨ MỆNH CỦA Việt Bảo Long</h2>
            <p>Ban Lãnh đạo Bảo Vệ việt bảo long xin gửi lời tri ân sâu sắc đến toàn thể Quý khách hàng, Cán bộ nhân viên, và cộng đồng xã hội đã tin tưởng hợp tác, sẻ chia và cùng nhau làm nên tập thể việt bảo long vững mạnh, đoàn kết như ngày nay. Chúng tôi xin cam kết:</p>
            <div class="su-menh-items">
                <div class="su-menh-item d-flex align-items-center gap-20">
                    <!-- <div class="icon key-feature-card__icon">
                        <img class="icon__img icon__img-border icon-border" src="<?php echo wp_get_attachment_image_src(18)[0]; ?>" alt="">
                    </div> -->
                    <div class="icon-content">
                        <p class="text-bold">Đối Với Khách Hàng</p>
                        <p>Cung cấp dịch vụ bảo vệ chuyên nghiệp nhất đáp ứng mọi nhu cầu của khách hàng</p>
                    </div>
                </div>
                <div class="su-menh-item d-flex align-items-center gap-20">
                    <!-- <div class="icon key-feature-card__icon">
                        <img class="icon__img icon__img-border icon-border" src="<?php echo wp_get_attachment_image_src(17)[0]; ?>" alt="">
                    </div> -->
                    <div class="icon-content">
                        <p class="text-bold">Đối Với Nhân Viên</p>
                        <p>Tạo môi trường làm việc chuyên nghiệp và nguồn thu nhập ổn định cho cán bộ nhân viên</p>
                    </div>
                </div>
                <div class="su-menh-item d-flex align-items-center gap-20">
                    <!-- <div class="icon key-feature-card__icon">
                        <img class="icon__img icon__img-border icon-border" src="<?php echo wp_get_attachment_image_src(16)[0]; ?>" alt="">
                    </div> -->
                    <div class="icon-content">
                        <p class="text-bold">Đối Với Xã Hội</p>
                        <p>Góp phần giữ gìn trật tự an toàn xã hội, Đóng góp vào sự phát triển kinh tế đất nước</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-laptop col-sm-6 col-12">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/08.jpg" alt="hình đội ngũ">
        </div>
    </div>
</div>

<!-- 6 lý do để chọn -->

<!-- =========================TIN TỨC========================= -->
<div class="tin-tuc page-content section">
    <h2 class="text-bold main-color uppercase text_blue title__decoration_border_bottom title__section text-uppercase text-center">Tin tức mới nhất</h2>
    <p class="text-center">Tin tức liên quan đến bảo vệ cập nhật mới nhất</p>
    <div class="container glide tin-tuc__glide">
        <div class="glide__track" data-glide-el="track">
            <div class="glide__slides">
                <?php
                $recentPosts = new WP_Query(array(
                    'posts_per_page' => 9
                ));
                while ($recentPosts->have_posts()) {
                    $recentPosts->the_post(); ?>
                    <div class="post flex-laptop-30 post__border flex-sm-100 flex-col justify-content-between slide glide__slide">
                        <div class="content-box__background_blue">
                            <a class="overflow-hidden" href="<?php the_permalink(); ?>"><?php the_post_thumbnail("newsHomePage"); ?></a>
                            <div class="post__info">
                                <h3 class="content-box__title_padding text-center text-md"><a class="link content-box__title_color_white text-regular" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <!-- <div class="post-excerpt">
                                    <?php echo wp_trim_words(get_the_content(), 18); ?>
                                    <p><a class="btn btn__post_detail" href="<?php the_permalink(); ?>">CHI TIẾT</a></p>
                                </div> -->
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="glide__arrows" data-glide-el="controls">
            <button class="custom__arrow glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fa-solid fa-arrow-left"></i></button>
            <button class="custom__arrow glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fa-solid fa-arrow-right"></i></button>
        </div>
    </div>
</div>

<!-- =========================THƯ VIỆN HÌNH ẢNH========================= -->
<div class="thu-vien-hinh-anh city-bg page-content bg-F4FAFD section">
    <h2 class="text-bold main-color uppercase text_blue title__decoration_border_bottom title__section text-uppercase text-center">THƯ VIỆN HÌNH ẢNH</h2>
    <!-- <div class="tabs text-center">
        <button class="tab__btn tab__btn_active uppercase" onclick="openTab(event, 'tab1')">dịch vụ</button>
        <button class="tab__btn uppercase" onclick="openTab(event, 'tab2')">hoạt động</button>
        <button class="tab__btn uppercase" onclick="openTab(event, 'tab3')">sự kiện</button>
         
    </div> -->
    <div class="container">
        <div class="custom-gallery grid grid-template__column_5">
            <!-- <?php echo do_shortcode('[custom_gallery start=120 end=130]'); ?> -->
            <!-- <?php echo do_shortcode('[metaslider id="170"]'); ?> -->
            <?php if (function_exists('photo_gallery')) {
                photo_gallery(1);
            } ?>
        </div>
    </div>
</div>

<!-- =========================ĐỐI TÁC=================================== -->
<div class="section bg-007cd2">
    <h2 class="text-bold main-color uppercase text_white title__decoration_border_bottom title__section text-uppercase text-center">Đối tác của chúng tôi</h2>
    <div class="container">
        <?php echo do_shortcode('[metaslider id="130"]'); ?>
    </div>
</div>

<!--==========================LIEN HE===================================== -->
<div class="lien-he-ve-chung-toi bg-0b3a94 section">
    <div class="row justify-between align-center container text_white">
        <div class="contact__text flex-75">
            <h2 class="page__title third-color text-2xl">Liên Hệ Với Chúng Tôi: 0966 673 288</h2>
            <p class="third-color text-xl">Việt Bảo Long hân hạnh được hợp tác với các Khách Hàng tiêu biểu</p>
        </div>
        <div class="contact__btn flex-25">
            <a class="link text_white button__contact" href="<?php echo site_url("/lien-he"); ?>">Liên hệ</a>
        </div>
    </div>
</div>

<div class="yeu-cau-bao-gia row flex-wrap overflow-hidden bg-image-01">
    <div class="container row">
        <div class="col-lg-6 col-12 camera-bg page-content p-b0">
            <div class="form__wrapper down-hidden__section">
                <div class="container text_white">
                    <h3 class="page__title text-color__white text-2xl">Nhận yêu cầu báo giá chi tiết dịch vụ bảo vệ</h3>
                    <p class="text_grey">Nếu quý khách đang thắc mắc bất kỳ gì về dịch vụ bảo vệ của Việt Bảo Long, bạn hãy để lại thông tin, chúng tôi sẽ gọi lại hỗ trợ cho quý khách!</p>
                </div>
                <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" class="flex-column primary-color-bg gap-25 row bg-0b3a94 form-01" method="POST">
                    <input type="hidden" name="action" value="custom_form_submission">
                    <div class="flex gap-30 flex-wrap">
                        <input type="text" name="fullname" id="hoten" placeholder="Họ tên" required>
                        <input type="tel" name="mobile_phone" id="sdt" placeholder="Điện thoại" required>
                    </div>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <input type="text" name="address" id="địa chỉ" placeholder="Địa chỉ">
                    <textarea name="message_content" id="message" cols="30" rows="10" placeholder="Nội dung"></textarea>
                    <button class="btn">Gửi yêu cầu</button>
                </form>
            </div>
        </div>
        <div class="col-lg-6 col-12 right-hidden__section">
            <img class="height-100 object-fit-cover display-sm-none image_cover" style="object-position: left bottom;" src="<?php echo get_template_directory_uri(); ?>/assets/bg/TA9A0315.jpg" alt="Yêu cầu báo giá">
        </div>
    </div>
</div>

<!-- <div class="hinh-anh-cong-ty">
    <h2>Hình ảnh công ty</h2>
    <p>Tham khảo một số hình ảnh về công ty và các hoạt động của chúng tôi.</p>
</div> -->

<?php
get_footer();
?>