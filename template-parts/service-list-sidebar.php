<h5 class="side-bar__title">Dịch vụ</h5>
<div class="sidebar__inner">
    <?php
    $services = new WP_Query(array(
        'post_type' => 'service',
        'posts_per_page' => 9
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