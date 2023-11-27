<service class="index-service">
    <div class="container">
        <div class="main-top">
            <h2 class="main-top__title gradient-title"><?php the_sub_field('title_of_services_block');?></h2>

            <p class="main-top__text"><?php the_sub_field('subtitle');?></p>
        </div>
        <div class="index-service__box">
            <div class="service-slider swiper-container">
                <ul class="service-list2 swiper-wrapper">

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

                    <li class="secrive-list__item swiper-slide">
                        <a href="<?php echo get_permalink();?>" class="service-list__inner"
                            data-title="<?php the_title();?>">
                            <div class="service-list__image">
                                <picture>
                                    <!-- <source type="image/webp" media="(max-width: 575px)" srcset="<?php echo get_template_directory_uri();?>/img/services/mobile.webp">
                                            <source media="(max-width: 575px)" width="251" height="182" srcset="<?php echo get_template_directory_uri();?>/img/services/mobile.png">
                                            <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/img/services/img.webp"> -->
                                    <img width="175" height="297" src="<?php the_field('image_of_service')['url'];?>"
                                        alt="<?php the_field('image_of_service')['alt'];?>">

                                </picture>
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


            <div class="index-service__bottom">

                <a href="<?php the_sub_field('link_of_button');?>" class="index-service__button green-btn">
                    <?php the_sub_field('text_of_button');?>
                </a>

                <nav class="slider-nav">
                    <button class="slider-nav__left service-prev">
                        <svg width="16" height="8">
                            <use href="<?php echo get_template_directory_uri();?>/img/sprite/sprite.svg#arrow-prev">
                            </use>
                        </svg>
                    </button>

                    <button class="slider-nav__right service-next">
                        <svg width="16" height="8">
                            <use href="<?php echo get_template_directory_uri();?>/img/sprite/sprite.svg#arrow-next">
                            </use>
                        </svg>
                    </button>
                </nav>

            </div>

        </div>
    </div>
</service>
</div>

<?php wp_reset_postdata();?>