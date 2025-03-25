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
    <!-- <div class="top-bar__mobile container text-center hidden-lg">
        <span class="top-bar__color slogan__identity display-block"> BẢO VỆ VIỆT BẢO LONG</span>
        <span class="slogan__text">An ninh tiên phong, bảo vệ chuyên nghiệp</span>
        <div class="pt-sm-6"><?php echo do_shortcode('[gtranslate]'); ?></div>
    </div> -->
    <header>
        <div class="top-bar header__top-bar_primary_color header__top-bar header__top-bar__text_white header__top-bar__text_s">
            <div class="container d-flex flex-md justify-between align-center flex-column-sm">
                <div class="text_white">
                    <span class="header__top-bar__seperation header__top-bar__text_margin text-capitalize"> Bảo Vệ Việt Bảo Long</span>
                    <!-- <span>An ninh tiên phong, bảo vệ chuyên nghiệp</span> -->
                    <i class="fa-solid fa-phone"></i><span class="header__top-bar__text_padding"><a class="link text_white" href="tel:0966 673 288">0966 673 288</a></span>
                </div>
                <div class="d-flex align-center">
                    <span class="header__top-bar__seperation header__top-bar__text_margin"><a class="link text_white" href="#">Hồ sơ năng lực</a></span>
                    <div class="multi-language"><?php echo do_shortcode('[gtranslate]'); ?></div>
                </div>
            </div>
        </div>
        <div class="search-overlay search-overlay_top container-fluid d-flex flex-column justify-center align-center">
            <div class="container text-center">
                <i class="fa-solid fa-magnifying-glass search-overlay__icon" aria-hidden="true"></i>
                <input type="text" id="search-term" class="search-term search-box text-center" placeholder="Nhập từ khóa tìm kiếm">
                <i class="fa-solid fa-times search-overlay__icon flex-0 search-overlay__icon-close" aria-hidden="true"></i>
            </div>
            <div class="container">
                <ul id="search-overlay__results" class="list-type-none">
                </ul>
            </div>
        </div>
        <nav class="nav-items bg-color-1 header__nav container row justify-between">
            <div class="header__logo">
                <a href="<?php echo site_url(); ?>" class="d-flex align-center link">
                    <?php
                    $image_id = 54; // Replace with the ID of your image
                    $logo_url = wp_get_attachment_image_src($image_id, 'full')[0];
                    ?>
                    <span><img class="header__logo-image" src="<?php echo esc_url($logo_url); ?>" alt="logo image"></span>
                    <span class="text-uppercase header__logo-text text-lg">An ninh tiên phong</span>
                </a>
            </div>


            <div class="header__menu hidden-sm">
                <ul class="d-flex header__menu-list align-center">
                    <li class="header__menu-item"><a class="link header__menu-link" href="<?php echo site_url("/") ?>">Trang chủ</a></li>
                    <li class="header__menu-item"><a class="link header__menu-link" href="<?php echo site_url('/gioi-thieu') ?>">Giới thiệu</a></li>
                    <li class="header__menu-item position-relative">
                        <a class="link header__menu-link header__submenu-link" href="<?php echo site_url('/dich-vu') ?>">
                            Dịch vụ
                            <i class="fa-solid fa-chevron-down"></i>
                        </a>
                        <ul class="list-type-none flex-col header__submenu-list position-absolute header__menu-list hidden">
                            <?php
                            $terms = get_terms(array(
                                'taxonomy' => 'service-category',
                                'hide_empty' => false,
                            ));
                            foreach ($terms as $term): ?>
                                <li class="header__submenu-item">
                                    <a class="link header__submenu-item_link" href="<?php echo get_term_link($term); ?>">
                                        <?php echo $term->name; ?>
                                    </a>
                                </li>
                            <?php
                            endforeach;
                            ?>
                        </ul>
                    </li>
                    <li class="header__menu-item"><a class="link header__menu-link" href="<?php echo site_url('/blog'); ?>">tin tức</a></li>
                    <li class="header__menu-item"><a class="link header__menu-link" href="<?php echo site_url('/tuyen-dung') ?>">tuyển dụng</a></li>
                    <li class="header__menu-item"><a class="link header__menu-link" href="<?php echo site_url('/lien-he') ?>">liên hệ</a></li>
                    <li class="header__menu-item"><a class="link header__menu-link" href="<?php echo site_url('/du-an') ?>">dự án</a></li>
                    <!-- <li><a class="site-button" href="">Hồ sơ năng lực</a></li> -->
                    <!-- <li class="header__search">
                        <button class="search-button header__search-button">
                            <i class="fa-solid fa-magnifying-glass header__search-button__icon"></i>
                        </button>
                    </li> -->
                </ul>
            </div>
            <div class="header__search hidden-sm">
                <button class="search-button header__search-button">
                    <i class="fa-solid fa-magnifying-glass header__search-button__icon"></i>
                </button>
            </div>

            <div class="header__mobile-navigation hidden-lg ">
                <div class="d-flex align-center header__mobile-navigation__inner">
                    <button class="search-button search-button__mobile header__search-button">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                    <div class="header__dropdown">
                        <i class="fa-solid fa-bars icon__mobile header__dropdown-icon_size_md">
                        </i>
                    </div>
                </div>
            </div>



            <div class="header__menu-mobile menu__mobile-hidden container">
                <ul class="flex-col header__menu-list header__menu-list__mobile_no_padding">
                    <li class="menu-item header__dropdown-menu-item_not_last"><a class="header__dropdown-menu-item-link" href="<?php echo site_url('/') ?>">Trang chủ</a></li>
                    <li class="menu-item header__dropdown-menu-item_not_last"><a class="header__dropdown-menu-item-link" href="<?php echo site_url('/gioi-thieu') ?>">Giới thiệu</a></li>
                    <li class="menu-item header__dropdown-menu-item_not_last"><a class="header__dropdown-menu-item-link" href="<?php echo site_url('/dich-vu') ?>">Dịch vụ</a></li>
                    <li class="menu-item header__dropdown-menu-item_not_last"><a class="header__dropdown-menu-item-link" href="<?php echo site_url('/blog'); ?>">tin tức</a></li>
                    <li class="menu-item header__dropdown-menu-item_not_last"><a class="header__dropdown-menu-item-link" href="<?php echo site_url('/tuyen-dung') ?>">tuyển dụng</a></li>
                    <li class="menu-item header__dropdown-menu-item_not_last"><a class="header__dropdown-menu-item-link" href="<?php echo site_url('/lien-he') ?>">liên hệ</a></li>
                    <li class="menu-item header__dropdown-menu-item_not_last"><a class="header__dropdown-menu-item-link" href="<?php echo site_url('/du-an') ?>">dự án</a></li>
                    <li class="header__cta text-center"><a class="site-button display-block text-center link" href="#">Hồ sơ năng lực</a></li>
                </ul>
                <ul class="d-flex header__menu-list header__social-media-list header__menu-list__mobile_no_padding">
                    <li><a href="#" class="icon__social-media_fb icon__social-media">
                            <i class="fa fa-facebook third-color icon__social-media_white"></i></a></li>
                    <li><a href="#" class="icon__social-media icon__social-media_yt">
                            <i class="fa fa-youtube third-color icon__social-media_white"></i>
                        </a></li>
                    <li><a href="#" class="social-media__tiktok flex justify-content-center align-items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-tiktok.png" alt="Icon Tiktok" class="icon__social-media">
                        </a></li>
                    <li><a href="#" class="social-media__zalo flex justify-content-center align-items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/iconzalo.png" alt="Icon Zalo" class="icon__social-media">
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>