<?php get_header(); ?>

<div class="container--1600">
    <article class="single-post">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                ?>
                <div class="single-post__content">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                    <div class="single-post__meta">
                        <p>Catégorie : <?php echo get_the_category_list(', '); ?></p>
                        <p>Auteur : <?php the_author(); ?></p>
                        <p>Date : <?php echo get_the_date(); ?></p>
                    </div>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="single-post__thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <?php
            }
        }
        ?>
    </article>
</div>

<?php get_footer(); ?>
