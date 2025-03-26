<?php

get_header();

?>

<?php
get_header();
?>

<?php 
pageBanner();
?>


<div class="container">
    <div class="section row">
        <div class="col-12 col-lg-9">
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
        <div class="col-12 col-lg-3">
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
                    <div class="side-bar__service">
                        <a class="link text_black flex align-center row" href="<?php the_permalink(); ?>">
                            <div class="flex-40 side-bar__thumbnail_border"><?php the_post_thumbnail("full", array('class' => 'side-bar__thumbnail_border')); ?></div>
                            <h3 class="flex-60 side-bar__text_no_bold text-sm side-bar__text_padding"><?php the_title(); ?></h3>
                        </a>
                    </div>
                <?php }
                wp_reset_postdata();
                ?>
            </div>
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