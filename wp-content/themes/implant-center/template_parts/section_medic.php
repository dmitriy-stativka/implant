<section class="our-medic">
    <div class="container">
      <div class="main-top">
        <h2 class="main-top__title gradient-title">
        <?php the_sub_field('medic_title');?>
        </h2>

        <p class="main-top__text">
        <?php the_sub_field('medic_subtitle');?>
        </p>
      </div>

      <div class="our-medic__box">
        <div class="medic-slider swiper-container">
          <ul class="medic-list swiper-wrapper">

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



                          <li class="medic-list__item swiper-slide">
                            <a href="<?php echo get_permalink();?>" class="medic-list__inner">
                                <div class="medic-list__image">
                                  <picture>
                                      <img width="186" height="205" src="<?php the_field('image')['url'];?>" alt="<?php the_field('image')['alt'];?>">
                                  </picture>
                                </div>
                                <div class="medic-list__descr">
                                  <h3 class="medic-list__title">
                                      <?php the_title();?>
                                  </h3>
                                  <h4 class="medic-list__subtitle gradient-title"><?php the_field('position');?></h4>

                                  <div class="medic-list__bottom">
                                      <span class="medic-list__exp">
                                        <?php the_field('experience');?>
                                      </span>
                                      <!-- <ul class="point-list">
                                          <?php if (have_rows('info_list')):
                                                  while (have_rows('info_list')) : the_row(); ?>

                                                      <li class="point-list__item">
                                                          <?php the_sub_field('text');?>
                                                      </li>

                                                  <?php endwhile;
                                              endif; 
                                          ?>
                                      </ul> -->
                                  </div>

                                </div>
                            </a>
                          </li>
              
                  <?php endwhile; ?>
              <?php endif; ?>
          <?php wp_reset_postdata(); ?>


          </ul>
        </div>

        <div class="our-medic__bottom">
          <nav class="slider-nav">
            <button class="slider-nav__left medic-prev">
              <svg width="16" height="8">
                <use href="<?php echo get_template_directory_uri();?>/img/sprite/sprite.svg#arrow-prev"></use>
              </svg>
            </button>

            <button class="slider-nav__right medic-next">
              <svg width="16" height="8">
                <use href="<?php echo get_template_directory_uri();?>/img/sprite/sprite.svg#arrow-next"></use>
              </svg>
            </button>
          </nav>

        </div>
      </div>

    </div>
  </section>