<?php
get_header();
?>
<div class="page-banner blog overlay-black-middle">
    <div class="container">
        <h1 class="text-white position-relative z-2 capitalize">tin tức</h1>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <span><a href="<?php echo site_url("/"); ?>">Trang chủ</a></span>
        <span>Tin tức</span>
    </div>
</div>

<div class="container page-content">
    <div class="flex gap-30 flex gap-30 overflow-hidden pb-10">
        <?php
        while (have_posts()) {
            the_post(); ?>
            <div class="post flex-30 post__border flex-col justify-content-between">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                <div class="post__info">
                    <h2 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="post-excerpt">
                        <?php echo wp_trim_words(get_the_content(), 18); ?>
                        <p><a class="btn btn__post_detail" href="<?php the_permalink(); ?>">CHI TIẾT</a></p>
                    </div>
                </div>
            </div>
        <?php }
        ?>
    </div>
    <?php echo paginate_links();?>
</div>

<!-- Your main content goes here -->

<?php
get_footer();
?>