<?php
get_header();
?>
<div class="page-banner blog overlay-black-middle">
    <div class="container">
        <h1 class="text-white position-relative z-2 capitalize"><?php post_type_archive_title(); ?></h1>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
    <span><a href="<?php echo site_url("/");?>">Trang chủ</a></span>
    <span><?php echo get_the_archive_title(); ?></span>
    </div>
</div>

<div class="container flex gap-30 page-content container flex gap-30 overflow-hidden">
    <?php
    while (have_posts()) {
        the_post(); ?>
        <div class="post flex-laptop-30 post__border">
            <?php the_post_thumbnail(); ?>
            <div class="post__info">
                <h2 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="post-excerpt">
                    <?php echo wp_trim_words(get_the_content(), 18); ?>
                    <p><a class="btn btn__post_detail" href="<?php the_permalink(); ?>">CHI TIẾT &raquo;</a></p>
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