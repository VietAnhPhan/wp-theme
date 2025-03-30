<?php
get_header();
?>
<!-- <div class="page-banner blog overlay-black-middle">
    <div class="container">
        <h1 class="text-white position-relative z-2 capitalize"><?php post_type_archive_title(); ?></h1>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <span><a href="<?php echo site_url("/"); ?>">Trang chủ</a></span>
        <span><?php echo get_the_archive_title(); ?></span>
    </div>
</div> -->

<?php
pageBanner(array(
    'title' => 'Dịch Vụ'
));
?>

<div class="container">
    <div class="section row">
        <?php
        while (have_posts()) {
            the_post(); ?>
            <div class="post col-lg-4 col-12 post__border">
                <div class="box-shadow_post d-flex flex-column post__height_100">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    <div class="post__info content-box__post d-flex flex-column justify-between flex-grow-1">
                        <h2 class="post__title"><a class="link text-lg text-medium text_black" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="post-excerpt">
                            <?php echo wp_trim_words(get_the_content(), 18); ?>
                            <!-- <p><a class="btn btn__post_detail" href="<?php the_permalink(); ?>">CHI TIẾT &raquo;</a></p> -->
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

</div>
<!-- Your main content goes here -->

<?php
get_footer();
?>