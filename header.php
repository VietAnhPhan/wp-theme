<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo wp_get_document_title(); ?></title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/huy-hieu.png" type="image/x-icon">
    <?php wp_head(); ?>
    <script src="https://kit.fontawesome.com/3a977ce2b2.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="top-bar__mobile container text-center">
        <span> CÔNG TY BẢO VỆ VIỆT BẢO LONG — NƠI ĐẶT TRỌN NIỀM TIN </span>
    </div>
    <header>
        <div class="top-bar container">
            <span> CÔNG TY BẢO VỆ VIỆT BẢO LONG — NƠI ĐẶT TRỌN NIỀM TIN </span>
            <div class="multi-language"></div>
        </div>
        <div class="search-overlay search-overlay__top container container-fluid">
            <div class="container flex align-items-center gap-20 justify-content-lg-center">
                <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
                <input type="text" id="search-term" class="search-term flex-50" placeholder="Nhập từ khóa tìm kiếm">
                <i class="fa-solid fa-times search-overlay__close flex-0" aria-hidden="true"></i>
            </div>
            <div class="container">
                <ul id="search-overlay__results" class="list-type-none">

                </ul>
            </div>
        </div>
        <nav class="container nav-items">
            <div class="logo">
                <a href="<?php echo site_url(); ?>">
                    <?php
                    $image_id = 54; // Replace with the ID of your image
                    $logo_url = wp_get_attachment_image_src($image_id, 'full')[0];
                    ?>
                    <img src="<?php echo esc_url($logo_url); ?>" alt="logo image">
                </a>
            </div>
            <div class="menu">
                <ul>
                    <li class="menu-item"><a href="<?php echo site_url("/")?>">Trang chủ</a></li>
                    <li class="menu-item"><a href="<?php echo site_url('/gioi-thieu') ?>">Giới thiệu</a></li>
                    <li class="menu-item position-relative">
                        <a href="<?php echo site_url('/dich-vu') ?>">
                            Dịch vụ
                            <i class="fa-solid fa-chevron-down"></i>
                        </a>

                        <ul class="list-type-none flex-col submenu position-absolute">
                            <?php
                            $terms = get_terms(array(
                                'taxonomy' => 'service-category',
                                'hide_empty' => false,
                            ));

                            foreach ($terms as $term): ?>
                                <li class="submenu-item">
                                    <a href="<?php echo get_term_link($term); ?>">
                                        <?php echo $term->name; ?>
                                    </a>
                                </li>
                            <?php
                            endforeach;
                            ?>

                        </ul>
                    </li>
                    <li class="menu-item"><a href="<?php echo site_url('/blog'); ?>">tin tức</a></li>
                    <li class="menu-item"><a href="<?php echo site_url('/tuyen-dung') ?>">tuyển dụng</a></li>
                    <li class="menu-item"><a href="<?php echo site_url('/lien-he') ?>">liên hệ</a></li>
                    <li class="menu-item"><a href="<?php echo site_url('/du-an') ?>">dự án</a></li>
                    <li><a class="site-button" href="">Hồ sơ năng lực</a></li>
                    <li>
                        <button class="search-button">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </li>
                </ul>
            </div>
            <div class="menu__mobile flex">
                <button class="search-button search-button__mobile">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
                <div class="dropdown">
                    <div class="dropdown__closed">
                        <i class="fa-solid fa-bars icon__mobile">
                        </i>
                    </div>
                    <div class="dropdown__opened display-none overlay__background">
                        <i class="fa-solid fa-times"></i>
                    </div>
                </div>

                <div class="dropdown__menu display-none">
                    <div class="logo text-center">
                        <a href="<?php echo site_url(); ?>">
                            <?php
                            $image_id = 54; // Replace with the ID of your image
                            $logo_url = wp_get_attachment_image_src($image_id, 'full')[0];
                            ?>
                            <img src="<?php echo esc_url($logo_url); ?>" alt="logo image">
                        </a>
                    </div>
                    <ul class="flex-col">
                        <li class="menu-item"><a href="<?php echo site_url('/') ?>">Trang chủ</a></li>
                        <li class="menu-item"><a href="<?php echo site_url('/gioi-thieu') ?>">Giới thiệu</a></li>
                        <li class="menu-item"><a href="<?php echo site_url('/dich-vu') ?>">Dịch vụ</a></li>
                        <li class="menu-item"><a href="<?php echo site_url('/blog'); ?>">tin tức</a></li>
                        <li class="menu-item"><a href="<?php echo site_url('/tuyen-dung') ?>">tuyển dụng</a></li>
                        <li class="menu-item"><a href="<?php echo site_url('/lien-he') ?>">liên hệ</a></li>
                        <li class="menu-item"><a href="<?php echo site_url('/du-an') ?>">dự án</a></li>
                        <li><a class="site-button display-block text-center" href="">Hồ sơ năng lực</a></li>
                    </ul>
                    <ul class="gap-10 list-type-none social-media__list flex align-items-center justify-content-center">
                        <li><a href="#" class="social-media__icon social-media__fb flex justify-content-center align-items-center">
                                <i class="fa fa-facebook third-color"></i></a></li>
                        <li><a href="#" class="social-media__icon social-media__yt flex justify-content-center align-items-center">
                                <i class="fa fa-youtube third-color"></i>
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


        </nav>
    </header>