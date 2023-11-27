<section class="pas-section">
    <div class="container">
        <div class="pas-section__box">
            <h2 class="pas-section__title gradient-title"><?php the_sub_field('title');?></h2>
            <ul class="pas-list">
                <?php if (have_rows('list')):
                        while (have_rows('list')) : the_row(); ?>
                             <li class="pas-list__item"><?php the_sub_field('desciption');?></li>
                        <?php endwhile;
                    endif; 
                ?>
            </ul>
        </div>
    </div>
</section>