<?php

get_header();

?>

<?php
get_header();
?>
<!-- <div class="page-banner blog overlay-black-middle">
    <div class="container">
        <h1 class="text-white position-relative z-2 capitalize">dịch vụ</h1>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <span><a href="<?php echo site_url("/"); ?>">Trang chủ</a></span>
        <span><?php echo the_title(); ?></span>
    </div>
</div> -->

<?php
pageBanner();
?>

<div class="container row">
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

        <?php } 
        
        
        
        relatedPosts();
        
        
        ?>

        


    </div>
    <div class="col-12 col-lg-3">
        <?php get_template_part('template-parts/service-list-sidebar') ?>
        <?php get_template_part('template-parts/post-list-sidebar') ?>
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