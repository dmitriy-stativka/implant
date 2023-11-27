<section class="services-third">
    <div class="container">
        <h2 class="services-third__title"><?php the_sub_field('title');?></h2>
        <div class="services-third__box">
            <article class="services-third__article">
                <p class="services-third__text"><?php the_sub_field('desc');?> </p>
                <a href="<?php the_sub_field('link_button');?>" class="services-third__btn green-btn"><?php the_sub_field('text_button');?></a>
            </article>
            <div class="services-third__slider">
                <div class="about-slider swiper-container">
                    <ul class="about-slider__list swiper-wrapper">
                    <?php if (have_rows('gallery')):
                                while (have_rows('gallery')) : the_row(); ?>
                                    <li class="about-slider__slide swiper-slide">
                                        <div class="about-slider__link">
                                            <img width="226" height="335" src="<?php the_sub_field('image')['url'];?>" alt="<?php the_sub_field('image')['alt'];?>">                       
                                        </div>
                                    </li>
                                <?php endwhile;
                            endif; 
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>