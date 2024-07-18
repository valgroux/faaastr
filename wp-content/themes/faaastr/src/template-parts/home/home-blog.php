<div class="noir--background">
    <section class="blog">
        <div class="container--1600">

            <div class="blog__top">

                <h2 class="h2">Un peu de lecture</h2>

                <button class="cta">
                    <div class="cta__icon cta__icon--arrow"></div>
                    <a href="#">Voir tous les articles</a>
                </button>

            </div>

            <?php
            // Query for the latest 3 posts
            $recent_posts = new WP_Query(array(
                'posts_per_page' => 3,
                'post_status'    => 'publish',
            ));

            if ($recent_posts->have_posts()) :
                while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                    <div class="blog__article">

                        <div class="blog__article__content">

                            <div class="blog__article__content__left">
                                <div class="blog__article__content__left__top">
                                    <p><?php echo get_the_category_list(', '); ?></p>
                                </div>
                                <div class="blog__article__content__left__bottom">
                                    <p>Par <?php the_author(); ?></p>
                                </div>
                            </div>

                            <div class="blog__article__content__center">
                                <div class="blog__article__content__center__title">
                                    <h3 class="h3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                </div>
                                <div class="blog__article__content__center__extrait">
                                    <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                                </div>
                            </div>

                            <div class="blog__article__content__right">
                                <div class="blog__article__content__right__calendar"></div>
                                <div class="blog__article__content__right__date">
                                    <p><?php echo get_the_date(); ?></p>
                                </div>
                            </div>

                        </div>

                        <?php if (has_post_thumbnail()) : ?>
                            <div class="blog__article__img">
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="blog__article__separator"></div>

                    </div>
                <?php endwhile;
                wp_reset_postdata();
            endif;
            ?>

            <button class="cta cta--responsive">
                <div class="cta__icon cta__icon--arrow"></div>
                <a href="#">Voir tous les articles</a>
            </button>

        </div>
    </section>
</div>
