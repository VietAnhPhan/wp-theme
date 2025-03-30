<?php
while (have_posts()) {
    the_post(); ?>
    <?php the_post_thumbnail('full',array(
        'class'=>'post__thumbnail'
    )); ?>
    <div class="post__info">
        <!-- <h1 class="post__title"><?php the_title(); ?></a></h1> -->
        <div class="post-excerpt">
            <?php the_content(); ?>
        </div>
    </div>
<?php } ?>