<?php
get_header();
?>

<!-- Your main content goes here -->
<div class="slider carousel overflow-x-hidden" data-range="100" data-unit="%">
    <div class="slides carousel-track">
        <div class="slide carousel-item">
            <?php
            $image_url = get_template_directory_uri() . '/assets/banners/banner03_compressed.jpg';
            ?>
            <img src="<?php echo esc_url($image_url); ?>" alt="Banner 1">
        </div>
        <div class="slide carousel-item">
            <?php
            $image_url = get_template_directory_uri() . '/assets/banners/banner02_compressed.jpg';
            ?>
            <img src="<?php echo esc_url($image_url); ?>" alt="Banner 2">
        </div>
    </div>

    <button class="arrow-navigation__prev arrow-navigation prev"><i class="fa-solid fa-arrow-left"></i></button>
    <button class="arrow-navigation__next arrow-navigation next"><i class="fa-solid fa-arrow-right"></i></button>

    <!-- <div class="navigation flex gap-8">
        <button class="prev"></button>
        <button class="next"></button>
    </div> -->
</div>
<div class="tieuchi">
    <div class="container">
        <div class="tieuchi-wrapper flex flex-wrap gap-laptop-2 container">
            <div class="tieuchi__item flex-sm-100 flex-laptop flex-tablet-50">
                <span class="icon"></span>
                <span class="description text-bold">nhân viên</span>
                <span class="number main-color text-bold">2000+</span>
                <i class="fa-solid fa-caret-down text-white"></i>
            </div>
            <div class="tieuchi__item flex-sm-100 flex-laptop flex-tablet-50">
                <span class="icon"></span>
                <span class="description text-bold">khách hàng</span>
                <span class="number main-color text-bold">1000+</span>
                <i class="fa-solid fa-caret-down text-white"></i>
            </div>
            <div class="tieuchi__item flex-sm-100 flex-laptop flex-tablet-50">
                <span class="icon"></span>
                <span class="description text-bold">chi nhánh</span>
                <span class="number main-color text-bold">30+</span>
                <i class="fa-solid fa-caret-down text-white"></i>
            </div>
            <div class="tieuchi__item flex-sm-100 flex-laptop flex-tablet-50">
                <span class="icon"></span>
                <span class="description text-bold">năm kinh nghiệm</span>
                <span class="number main-color text-bold">10+</span>
                <i class="fa-solid fa-caret-down text-white"></i>
            </div>
        </div>
        <div class="tieuchi-convince">
            <p class="text-white text-bold fs-l">Với hơn 10 năm kinh nghiệm trong nghề, việt bảo long cung cấp</p>
            <p class="main-color text-bold fs-xl">DỊCH VỤ BẢO VỆ CHUYÊN NGHIỆP VỚI CHI PHÍ TỐI ƯU NHẤT</p>
        </div>
    </div>
</div>
<div class="su-menh bg-color-3">
    <div class="container flex align-items-center gap-10 content-inner flex-wrap">
        <div class="flex-laptop left-hidden__section">
            <h2 class="text-bold main-color uppercase">SỨ MỆNH CỦA Việt Bảo Long</h2>
            <p>Ban Lãnh đạo Bảo Vệ việt bảo long xin gửi lời tri ân sâu sắc đến toàn thể Quý khách hàng, Cán bộ nhân viên, và cộng đồng xã hội đã tin tưởng hợp tác, sẻ chia và cùng nhau làm nên tập thể việt bảo long vững mạnh, đoàn kết như ngày nay. Chúng tôi xin cam kết:</p>
            <div class="su-menh-items">
                <div class="su-menh-item flex align-items-center gap-20">
                    <div class="icon">
                        <img class="icon-border" src="<?php echo wp_get_attachment_image_src(18)[0]; ?>" alt="">
                    </div>
                    <div class="icon-content">
                        <p class="text-bold">Đối Với Khách Hàng</p>
                        <p>Cung cấp dịch vụ bảo vệ chuyên nghiệp nhất đáp ứng mọi nhu cầu của khách hàng</p>
                    </div>
                </div>
                <div class="su-menh-item flex align-items-center gap-20">
                    <div class="icon">
                        <img class="icon-border" src="<?php echo wp_get_attachment_image_src(17)[0]; ?>" alt="">
                    </div>
                    <div class="icon-content">
                        <p class="text-bold">Đối Với Nhân Viên</p>
                        <p>Tạo môi trường làm việc chuyên nghiệp và nguồn thu nhập ổn định cho cán bộ nhân viên</p>
                    </div>
                </div>
                <div class="su-menh-item flex align-items-center gap-20">
                    <div class="icon">
                        <img class="icon-border" src="<?php echo wp_get_attachment_image_src(16)[0]; ?>" alt="">
                    </div>
                    <div class="icon-content">
                        <p class="text-bold">Đối Với Xã Hội</p>
                        <p>Góp phần giữ gìn trật tự an toàn xã hội, Đóng góp vào sự phát triển kinh tế đất nước</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-laptop">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/08.jpg" alt="hình đội ngũ">
        </div>
    </div>
</div>

<div class="dich-vu-bao-ve content-inner opacity-full__section">
    <div class="container">

        <h2 class="fs-xl main-color text-center uppercase title__decoration">Dịch vụ bảo vệ việt bảo long</h2>
        <p class="text-white text-center max-w700 margin-auto m-bottom50">Ban Lãnh đạo Bảo vệ việt bảo long® xin gửi tri ân sâu sắc đến toàn thể Quý khách hàng, Cán bộ nhân viên, và cộng đồng xã hội đã tin tưởng hợp tác, sẻ chia và cùng nhau làm nên tập thể việt bảo long® vững mạnh, đoàn kết như ngày nay</p>
    </div>
    <div class="dich-vu-bao-ve-items overflow-hidden carousel" data-range="300" data-unit="px">
        <div class="carousel-track flex gap-30">
            <?php
            $services = new WP_Query(array(
                'post_type' => 'service',
                'posts_per_page' => 9,
                'order' => 'ASC'
            ));
            while ($services->have_posts()) {
                $services->the_post(); ?>
                <div class="dich-vu-bao-ve-item bg-color-1 p-10 flex-sm-100 flex-laptop-20 slide carousel-item">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                        <p class="text-bold text-center"><?php the_title(); ?></p>
                    </a>
                </div>
            <?php }
            wp_reset_postdata();
            ?>
            <!-- <div class="dich-vu-bao-ve-item bg-white p-10 flex-sm-100 flex-laptop-20 slide carousel-item">
                <img src="<?php echo wp_get_attachment_image_src(20, "large")[0]; ?>" alt="">
                <p class="text-bold text-center">Bảo vệ mục tiêu cố định</p>
            </div>
            <div class="dich-vu-bao-ve-item bg-white p-10 flex-sm-100 flex-laptop-20 slide carousel-item">
                <img src="<?php echo wp_get_attachment_image_src(21, "large")[0]; ?>" alt="">
                <p class="text-bold text-center">Bảo vệ áp tải</p>
            </div>
            <div class="dich-vu-bao-ve-item bg-white p-10 flex-sm-100 flex-laptop-20 slide carousel-item">
                <img src="<?php echo wp_get_attachment_image_src(22, "large")[0]; ?>" alt="">
                <p class="text-bold text-center">Bảo vệ sự kiện</p>
            </div>
            <div class="dich-vu-bao-ve-item bg-white p-10 flex-sm-100 flex-laptop-20 slide carousel-item">
                <img src="<?php echo wp_get_attachment_image_src(23, "large")[0]; ?>" alt="">
                <p class="text-bold text-center">Bảo vệ tòa nhà</p>
            </div>
            <div class="dich-vu-bao-ve-item bg-white p-10 flex-sm-100 flex-laptop-20 slide carousel-item">
                <img src="<?php echo wp_get_attachment_image_src(24, "large")[0]; ?>" alt="">
                <p class="text-bold text-center">Bảo vệ nhà ở</p>
            </div>
            <div class="dich-vu-bao-ve-item bg-white p-10 flex-sm-100 flex-laptop-20 slide carousel-item">
                <img src="<?php echo wp_get_attachment_image_src(25, "large")[0]; ?>" alt="">
                <p class="text-bold text-center">Bảo vệ cửa hàng</p>
            </div>
            <div class="dich-vu-bao-ve-item bg-white p-10 flex-sm-100 flex-laptop-20 slide carousel-item">
                <img src="<?php echo wp_get_attachment_image_src(26, "large")[0]; ?>" alt="">
                <p class="text-bold text-center">Bảo vệ cửa hàng</p>
            </div>
            <div class="dich-vu-bao-ve-item bg-white p-10 flex-sm-100 flex-laptop-20 slide carousel-item">
                <img src="<?php echo wp_get_attachment_image_src(27, "large")[0]; ?>" alt="">
                <p class="text-bold text-center">Bảo vệ cửa hàng</p>
            </div> -->
        </div>
        <div class="text-center flex justify-content-center gap-10 p-20">
            <button class="prev__dich-vu prev"><i class="fa-solid fa-arrow-left"></i></button>
            <button class="next__dich-vu next"><i class="fa-solid fa-arrow-right"></i></button>
        </div>
    </div>


</div>
<div class="li-do-chon-chung-toi content-inner opacity-full__section">
    <div class="container">
        <h2 class="text-color__white text-center title__decoration">6 LÝ DO ĐỂ CHỌN BẢO VỆ VIỆT BẢO LONG:</h2>
        <p class="text-color__white max-w700 margin-auto text-center m-bottom50">Dịch vụ bảo vệ VIỆT BẢO LONG chú trọng trong việc đào tạo đội ngũ cân bộ nhân viên bài bản và chuyên sâu, luôn đảm bảo mang tới cho quý khách hàng một đội ngũ bảo vệ chuyên nghiệp – tâm huyết với nghề</p>
    </div>
    <div class="flex container align-items-center gap-20 flex-wrap down-hidden__section">
        <div class="flex-col flex-laptop">
            <div class="flex">
                <div class="icon-content text-color__white">
                    <p class="fs-md text-bold">Tiêu chuẩn chất lượng</p>
                    <p>Tiêu chuẩn chất lượng bảo vệ theo ISO 9001 - 2015</p>
                </div>
                <div class="icon">
                    <img src="<?php echo wp_get_attachment_image_src(35)[0]; ?>" alt="">
                </div>
            </div>
            <div class="flex">
                <div class="icon-content text-color__white">
                    <p class="fs-md text-bold">Bảo hiểm trách nhiệm</p>
                    <p>Bảo hiểm trách nhiệm dân sự lên đến 10 tỷ đồng</p>
                </div>
                <div class="icon">
                    <img src="<?php echo wp_get_attachment_image_src(34)[0]; ?>" alt="">
                </div>
            </div>
            <div class="flex">
                <div class="icon-content text-color__white">
                    <p class="fs-md text-bold">Trình độ chuyên môn</p>
                    <p>100% Đào tạo bài bản, chuyên nghiệp cho nhân viên</p>
                </div>
                <div class="icon">
                    <img src="<?php echo wp_get_attachment_image_src(33)[0]; ?>" alt="">
                </div>
            </div>
        </div>
        <div class="flex-laptop">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/circle.png ?>" alt="">
        </div>
        <div class="flex-col flex-laptop">
            <div class="flex">
                <div class="icon-content text-color__white">
                    <p class="fs-md text-bold">Tiêu chuẩn chất lượng</p>
                    <p>Tiêu chuẩn chất lượng bảo vệ theo ISO 9001 - 2015</p>
                </div>
                <div class="icon">
                    <img src="<?php echo wp_get_attachment_image_src(35)[0]; ?>" alt="">
                </div>
            </div>
            <div class="flex">
                <div class="icon-content text-color__white">
                    <p class="fs-md text-bold">Bảo hiểm trách nhiệm</p>
                    <p>Bảo hiểm trách nhiệm dân sự lên đến 10 tỷ đồng</p>
                </div>
                <div class="icon">
                    <img src="<?php echo wp_get_attachment_image_src(34)[0]; ?>" alt="">
                </div>
            </div>
            <div class="flex">
                <div class="icon-content text-color__white">
                    <p class="fs-md text-bold">Trình độ chuyên môn</p>
                    <p>100% Đào tạo bài bản, chuyên nghiệp cho nhân viên</p>
                </div>
                <div class="icon">
                    <img src="<?php echo wp_get_attachment_image_src(33)[0]; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tin-tuc page-content">
    <h2 class="page__title text-center title__decoration">Tin tức mới nhất</h2>
    <p class="text-center">Tin tức liên quan đến bảo vệ cập nhật mới nhất</p>
    <div class="container flex gap-30 overflow-hidden">
        <?php
        $recentPosts = new WP_Query(array(
            'posts_per_page' => 9
        ));

        while ($recentPosts->have_posts()) {
            $recentPosts->the_post(); ?>
            <div class="post flex-laptop-30 post__border flex-sm-100 overflow-hidden flex-col justify-content-between slide">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                <div class="post__info">
                    <h3 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="post-excerpt">
                        <?php echo wp_trim_words(get_the_content(), 18); ?>
                        <p><a class="btn btn__post_detail" href="<?php the_permalink(); ?>">CHI TIẾT</a></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<div class="thu-vien-hinh-anh city-bg page-content">
    <h2 class="page__title text-center title__decoration text-color__white">THƯ VIỆN HÌNH ẢNH</h2>
    <!-- <div class="tabs text-center">
        <button class="tab__btn tab__btn_active uppercase" onclick="openTab(event, 'tab1')">dịch vụ</button>
        <button class="tab__btn uppercase" onclick="openTab(event, 'tab2')">hoạt động</button>
        <button class="tab__btn uppercase" onclick="openTab(event, 'tab3')">sự kiện</button>
         
    </div> -->
    <div class="container">
        <div class="custom-gallery grid grid-template__column_5">
            <?php echo do_shortcode('[custom_gallery start=120 end=130]'); ?>
        </div>
    </div>
</div>


<div class="lien-he-ve-chung-toi page-content primary-color-bg">
    <div class="flex justify-content-between align-items-center container">
        <div class="contact__text flex-75">
            <h2 class="page__title third-color">Liên Hệ Với Chúng Tôi: 0966 673 288</h2>
            <p class="third-color">Việt Bảo Long hân hạnh được hợp tác với các Khách Hàng tiêu biểu</p>
        </div>
        <div class="contact__btn flex-25">
            <a class="btn" href="<?php echo site_url("/lien-he"); ?>">Liên hệ</a>
        </div>
    </div>
</div>

<div class="yeu-cau-bao-gia flex flex-wrap overflow-hidden">
    <div class="flex-laptop-60 camera-bg page-content p-b0">
        <div class="form__wrapper down-hidden__section">
            <div class="container">
                <h3 class="page__title text-color__white">Nhận yêu cầu báo giá chi tiết dịch vụ bảo vệ</h3>
                <p class="third-color opacity-75">Nếu quý khách đang thắc mắc bất kỳ gì về dịch vụ bảo vệ của Việt Bảo Long, bạn hãy để lại thông tin, chúng tôi sẽ gọi lại hỗ trợ cho quý khách!</p>
            </div>
            <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" class="flex-col primary-color-bg gap-25" method="POST">
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
    <div class="flex-laptop-40 right-hidden__section">
        <img class="height-100 object-fit-cover display-sm-none" src="<?php echo get_template_directory_uri(); ?>/assets/bg/TA9A0315.jpg" alt="Yêu cầu báo giá">
    </div>
</div>

<!-- <div class="hinh-anh-cong-ty">
    <h2>Hình ảnh công ty</h2>
    <p>Tham khảo một số hình ảnh về công ty và các hoạt động của chúng tôi.</p>
</div> -->

<?php
get_footer();
?>