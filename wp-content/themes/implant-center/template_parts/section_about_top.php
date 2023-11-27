<section class="first-sec" style="background-image: url(<?php the_sub_field('bg_img')['url'];?>)">
    <div class="container-mode container-mode--translate">
        <div class="first-sec__box">
            <div class="first-sec__coll">
                <h1 class="first-sec__title"><?php the_title();?></h1>

                <button data-btn="questions" class="first-sec__button transparent-btn"><?php the_sub_field('text_button');?></button>

            </div>

            <article class="first-sec__coll first-sec__coll-content">
                <p class="first-sec__text"><?php the_sub_field('description');?></p>

                <span class="first-sec__link">
                    <svg class="first-sec__icon"  width="9" height="62" viewBox="0 0 9 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.14645 61.3911C4.34171 61.5863 4.65829 61.5863 4.85355 61.3911L8.03553 58.2091C8.2308 58.0138 8.2308 57.6972 8.03553 57.502C7.84027 57.3067 7.52369 57.3067 7.32843 57.502L4.5 60.3304L1.67157 57.502C1.47631 57.3067 1.15973 57.3067 0.964466 57.502C0.769204 57.6972 0.769204 58.0138 0.964466 58.2091L4.14645 61.3911ZM4 0.962555L4 61.0375H5L5 0.962555H4Z"/>
                    </svg>
                </span>
            </article>
        </div>
    </div>
</section>