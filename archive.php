<?php

get_header();

?>

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
        <span><a href="<?php echo site_url("/");?>">Trang chủ</a></span>
        <span><?php echo the_title();?></span>
    </div>
</div>

<div class="container flex gap-30 page-content container flex gap-30 overflow-hidden flex-wrap">
    <div class="page__content flex-3">
        <?php
        while (have_posts()) {
            the_post(); ?>

            <?php the_post_thumbnail(); ?>
            <div class="post__info">
                <h2 class="post__title"><?php the_title(); ?></a></h2>
                <div class="post-excerpt">
                    <?php echo get_the_content(); ?>

                </div>
            </div>

        <?php } ?>
    </div>
    <div class="page__side-bar flex-1">
        <h5 class="side-bar__title">Dịch vụ</h5>
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