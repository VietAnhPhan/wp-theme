<?php
get_header();
?>
<?php
pageBanner(array(
    'title' => get_the_archive_title()
));
?>

<div class="container">
    <div class="row section">
        <?php
        while (have_posts()) {
            the_post(); ?>
            <div class="post col-lg-4 col-12">
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