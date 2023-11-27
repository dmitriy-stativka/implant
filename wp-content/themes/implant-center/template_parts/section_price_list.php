<section class="services-single-first">
      <div class="container-mode container-mode--translate">
        <div class="services-single-first__box">
          <ul class="services-single-first__list">


            <?php if (have_rows('list_of_services')):
                    while (have_rows('list_of_services')) : the_row(); ?>
                       
                       <li class="services-single-first__item">
                            <h2 class="services-single-first__title">
                                <?php the_sub_field('title_of_item');?>
                                <span class="services-single-first__icon">
                                    <img width="40" height="40" src="<?php the_sub_field('icon')['url'];?>" alt="<?php the_sub_field('icon')['alt'];?>">
                                </span>
                            </h2>

                            <ul class="services-single-first__sub-list">
                                <?php if (have_rows('price_list')):
                                    while (have_rows('price_list')) : the_row(); ?>
                                        <li class="services-single-first__sub-item">
                                                <span class="services-single-first__sub-name"><?php the_sub_field('title');?></span>
                                                <span class="services-single-first__sub-price"><?php the_sub_field('price');?> </span>
                                            </li>
                                        <?php endwhile;
                                    endif; 
                                ?>
                            </ul>
                        </li>
                    <?php endwhile;
                endif; 
            ?>
          </ul>

          <div class="services-single-first__image">
            <img src="<?php the_field('img_price')['url'];?>" alt="<?php the_field('img_price')['alt'];?>">
          </div>
        </div>
      </div>
    </section>