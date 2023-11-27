<div class="bg-wrapper">
<section class="index-first">
    <div class="container">
        <div class="index-first__box">
        <div class="index-first__item">
            <h1 class="index-first__title gradient-title"><?php the_sub_field('title_of_hero');?></h1>
            <h2 class="index-first__subtitle"><?php the_sub_field('description_of_hero');?></h2>
            <a href="<?php the_sub_field('link_of_button');?>" data-btn="questions" class="index-first__button"><?php the_sub_field('text_of_button');?></a>
        </div>

        <div class="index-first__item">
            <div class="index-first__image">
                <picture>
                    <img width="520" height="500" src="<?php the_sub_field('image_of_hero')['url']; ?>" alt="<?php the_sub_field('image_of_hero')['alt']; ?>">
                </picture>
            </div>
        </div>

        </div>
    </div>
</section>