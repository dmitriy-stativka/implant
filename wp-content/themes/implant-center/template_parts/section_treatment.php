<section class="services-single-second">
        <div class="container-mode container-mode--translate">
            <div class="services-single-second__box">
                <article class="services-single-second__article">
                    <h2 class="services-single-second__title"><?php the_sub_field('title');?></h2>

                    <p class="services-single-second__text"><?php the_sub_field('desc');?> </p>
                </article>

                <div class="point-line">
                    <h2 class="point-line__title"><?php the_sub_field('title_right');?></h2>

                    <ul class="point-line__list">
                        <?php if (have_rows('list')):
                            while (have_rows('list')) : the_row(); ?>
                                    <li class="point-line__item"><?php the_sub_field('item');?></li>
                                <?php endwhile;
                            endif; 
                        ?>
                    </ul>
                </div>

             </div>
        </div>
</section>