<?php

get_header();

?>

<?php
get_header();
?>


<?php
pageBanner();
?>

<!-- <div class="page-banner blog overlay-black-middle">
    <div class="container">
        <h1 class="text-white position-relative z-2 capitalize"><?php the_title(); ?></h1>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <span><a href="<?php echo site_url("/"); ?>">Trang chủ</a></span>
        <span><?php echo the_title(); ?></span>
    </div>
</div> -->

<div class="section">
    <div class="container flex gap-30 page-content container flex gap-30 overflow-hidden flex-wrap">
        <?php

        if (function_exists('toc_get_index')) {
            echo toc_get_index();
        }


        ?>
        <div class="section row section_no_top_padding">
            <div class="col-12 col-lg-9">
                <?php
                while (have_posts()) {
                    the_post(); ?>
                    <?php the_post_thumbnail(); ?>
                    <div class="post__info">
                        <h1 class="post__title"><?php the_title(); ?></a></h1>
                        <div class="post-excerpt">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php } ?>


                <h3 class="text-xl">Bài viết liên quan</h3>

                <div class="row">
                    <?php
                    $posts = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 6,
                    ));
                    while ($posts->have_posts()) {
                        $posts->the_post(); ?>
                        <div class="post col-lg-4 col-12 d-flex">
                            <div class="box-shadow_post d-flex flex-column">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                <div class="post__info d-flex flex-column justify-between flex-grow-1 content-box__post">
                                    <h3 class="post__title"><a class="link text-lg text-medium text_black" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>

            </div>
            <div class="col-12 col-lg-3">
                <?php get_template_part('template-parts/service-list-sidebar') ?>
                <?php get_template_part('template-parts/post-list-sidebar') ?>
            </div>
        </div>

    </div>
</div>
<!-- Your main content goes here -->

<?php
get_footer();
?>

<?php
get_footer();
?>