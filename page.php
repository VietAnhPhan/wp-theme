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
            <?php get_template_part('template-parts/post-content');
            
            relatedPosts(array(
                'post_type' => 'post'
            ));

            ?>

        </div>
        <div class="col-12 col-lg-3">
            <?php get_template_part('template-parts/service-list-sidebar'); ?>
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