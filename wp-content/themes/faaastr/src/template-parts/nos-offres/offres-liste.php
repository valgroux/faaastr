<section class="liste">
    <div class="container--1400">
        <div class="liste__content">

        <?php
            
            $parent_id = get_page_by_path('nos-offres')->ID; 

            
            $args = array(
                'post_type' => 'page',
                'post_parent' => $parent_id, 
                'posts_per_page' => -1, 
                'orderby' => 'menu_order',
                'order' => 'ASC'
            );

            $offre_query = new WP_Query($args);

            if ($offre_query->have_posts()) : 
                while ($offre_query->have_posts()) : $offre_query->the_post(); ?>
                    
                <a href="<?php the_permalink(); ?>" class="liste__content__link">
                    <div class="liste__content__link__bloc reveal-medium">
                        <div class="liste__content__link__bloc__left">
                            <?php the_post_thumbnail('tall'); ?>
                        </div>
                        <div class="liste__content__link__bloc__right">
                            <h3 class="h3"><?php the_title(); ?></h3>
                            <p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
                        </div>
                    </div>
                </a>                   
            
                <?php endwhile;
            

            else : 
                echo '<p>Aucune offre disponible pour le moment.</p>';
            endif;

            wp_reset_postdata();
            ?>


        </div>
    </div>
</section>