<section class="services-second">
    <div class="container-mode container-mode--translate">
        <ul class="service-list services-second__list">
            <?php
                $params = array(
                    'post_type' => 'services',
                    'posts_per_page' => -1,
                    'post__in' => get_sub_field( 'category__item' ),
                );
                $query = new WP_Query( $params );
                ?>
                <?php if($query->have_posts()): ?>
                    <?php while ($query->have_posts()): $query->the_post() ?>
                        <li class="secrive-list__item services-second__item">
                            <a href="<?php echo get_the_permalink();?>" class="service-list__inner" data-title="<?php the_title();?>">
                                <div class="service-list__image">
                                    <img width="175" height="297" src="<?php the_field('image_of_service')['url'];?>" alt="<?php the_field('image_of_service')['alt'];?>">
                                </div>
                                <div class="service-list__descr">
                                    <span class="service-list__title"><?php the_title();?></span>
                                    <p class="service-list__text"><?php the_field('mini_description');?></p>
                                </div>
                            </a>
                        </li> 
                    <?php endwhile; ?>
                <?php endif; 
            ?>       
        </ul>
    </div>
</section>
<?php wp_reset_postdata();?>