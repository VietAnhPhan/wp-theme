<?php

get_header();

?>

<?php
get_header();
pageBanner();
?>


<div class="container row">
    <div class="col-12 col-lg-9">
        <?php

        get_template_part('template-parts/post-content');
        relatedPosts();
        ?>
    </div>
    <div class="col-12 col-lg-3">
        <?php
        get_template_part('template-parts/service-list-sidebar');
        get_template_part('template-parts/post-list-sidebar');
        ?>
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