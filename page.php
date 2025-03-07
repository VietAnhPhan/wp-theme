<?php

get_header();

?>

<?php
get_header();
?>
<div class="page-banner blog overlay-black-middle">
    <div class="container">
        <h1 class="text-white position-relative z-2 capitalize"><?php the_title(); ?></h1>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <span><a href="<?php echo site_url("/"); ?>">Trang chủ</a></span>
        <span><?php echo the_title(); ?></span>
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

        <div class="flex-col gap-5">
            <?php
            $services = new WP_Query(array(
                'post_type' => 'service',
                'posts_per_page' => 9,
                'order' => 'ASC'
            ));
            while ($services->have_posts()) {
                $services->the_post(); ?>
                <div class="side-bar__service flex gap-10 align-items-center">
                    <div class="flex-40"><?php the_post_thumbnail(); ?></div>
                    <h3 class="post__title flex-60"><a class="text-decoration-none" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </div>
            <?php }
            wp_reset_postdata();
            ?>
        </div>
    </div>

</div>
</div>

<?php
get_footer();
?>

<?php
get_footer();
?>