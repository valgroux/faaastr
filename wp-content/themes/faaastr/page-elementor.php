<?php
/**
 * Template Name: Elementor
 * Template Post Type: page,post
 */

get_header();
?>

<div>
    <main>
        <?php
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>
    </main>
</div>

<?php
get_footer();
?>
