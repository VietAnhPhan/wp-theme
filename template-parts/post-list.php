<div class="container">
    <div class="row section">
        <?php
        while (have_posts()) {
            the_post(); ?>
            <div class="post col-lg-4 col-12 d-flex">
                <div class="box-shadow_post d-flex flex-column">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    <div class="post__info d-flex flex-column justify-between flex-grow-1 content-box__post">
                        <h3 class="post__title">
                            <a class="link text-lg text-medium text_black" href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <div class="post-excerpt text-565968">
                            <?php echo wp_trim_words(get_the_content(), 18); ?>
                            <!-- <p><a class="btn btn__post_detail" href="<?php the_permalink(); ?>">CHI TIẾT</a></p> -->
                        </div>
                    </div>
                </div>
            </div>
        <?php }
        ?>
    </div>
    <?php echo paginate_links(); ?>
</div>