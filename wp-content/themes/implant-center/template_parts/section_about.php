<div class="bg-wrapper">
    <section class="index-about">
        <div class="container">
            <div class="index-about__box">
                <article class="index-about__article">
                    <h2 class="index-about__title gradient-title"><?php the_sub_field('title_of_block');?></h2>
                    <p class="index-about__text"><?php the_sub_field('description');?></p>
                </article>

                <div class="index-about__wrapper">
                    <div class="about-slider swiper-container">
                        <ul class="about-slider__list swiper-wrapper">
                            <?php if (have_rows('gallary')):
                                    while (have_rows('gallary')) : the_row(); ?>
                                        <li class="about-slider__slide swiper-slide">
                                            <picture>
                                                <img  src="<?php the_sub_field('item_img');?>" alt="image">
                                            </picture>
                                        </li>
                                    <?php endwhile;
                                endif; 
                            ?>
                        </ul>
                    </div>

                    <div class="index-about__bottom">
                        <a href="<?php the_sub_field('link_button');?>" class="index-about__button green-btn"><?php the_sub_field('text_button');?></a>
                        <nav class="slider-nav">
                            <button class="slider-nav__left about-prev">
                                <svg width="16" height="8">
                                    <use href="<?php echo get_template_directory_uri();?>/img/sprite/sprite.svg#arrow-prev"></use>
                                </svg>
                            </button>
                            <button class="slider-nav__right about-next">
                                <svg width="16" height="8">
                                    <use href="<?php echo get_template_directory_uri();?>/img/sprite/sprite.svg#arrow-next"></use>
                                </svg>
                            </button>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>