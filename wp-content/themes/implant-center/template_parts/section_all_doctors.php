<section class="our-medic">
    <div class="container">
        <div class="our-medic_list">
            <?php
            $args = array(
                'post_type' => 'doctors',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC'
            );
            $posts_query = new WP_Query($args);
            ?>
            <?php if ($posts_query->have_posts()) : ?>
                <?php while ($posts_query->have_posts()) : $posts_query->the_post(); ?> 
                    <a href="<?php echo get_permalink();?>" class="medic-list__inner">
                        <div class="medic-list__image">
                            <picture>
                                <img width="186" height="205" src="<?php the_field('image'); ?>" alt="<?php the_field('image'); ?>">
                            </picture>
                        </div>
                        <div class="medic-list__descr">
                            <h3 class="medic-list__title">
                                <?php the_title()?>                                  
                            </h3>
                            <h4 class="medic-list__subtitle gradient-title"><?php the_field('position');?></h4>

                            <div class="medic-list__bottom">
                                <span class="medic-list__exp">
                                    <?php the_field('experience');?>
                                </span> 
                            </div>
                        </div>
                    </a>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); 
            ?>
        </div>
    </div>
</section>


<style>
    .our-medic_list{
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
    }


    @media (max-width: 767px) {
        .our-medic_list{
            flex-direction: column;
        }
    }


    .our-medic_list .medic-list__inner{
        flex-basis: calc(33% - 30px);
        height: auto;
    }
</style>