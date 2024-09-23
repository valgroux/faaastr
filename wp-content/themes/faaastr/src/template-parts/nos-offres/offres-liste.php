<section class="liste">
    <div class="container--1400">
        <div class="liste__content">

        <?php
        // Requête pour récupérer les articles de la catégorie "offre"
            $args = array(
                'category_name' => 'offre',
                'post_type' => 'post',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'ASC'
            );

            $offre_query = new WP_Query($args);

            if ($offre_query->have_posts()) : 
                while ($offre_query->have_posts()) : $offre_query->the_post(); ?>

                <div class="liste__content__bloc reveal-medium">
                    <div class="liste__content__bloc__left">
                        <?php the_post_thumbnail('tall'); ?>
                    </div>
                    <div class="liste__content__bloc__right">
                        <h3 class="h3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </div>

            <?php endwhile;

            else : 
                echo '<p>Aucune offre disponible pour le moment.</p>';
            endif;

            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>