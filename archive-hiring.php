<?php
get_header();
?>
<?php
pageBanner(array(
    'title' => get_the_archive_title()
));


get_template_part('template-parts/post-list');

?>

<!-- Your main content goes here -->

<?php
get_footer();
?>