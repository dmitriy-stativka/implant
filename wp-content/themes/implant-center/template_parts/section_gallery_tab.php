<section class="about-tabs-sec">
    <div class="container">
        <div class="about-tabs-sec__top">
            <article class="about-tabs-sec__article">
                <p class="about-tabs-sec__text"><?php the_sub_field('desc');?></p>
            </article>
            <h3 class="about-tabs-sec__title"><?php the_sub_field('slogan');?></h3>
        </div>
        <div class="about-tabs-sec__bottom about-tabs">
            <nav class="about-tabs__nav">
                <ul class="about-tabs__list">
                    <?php $i = 1; if (have_rows('tab')):
                            while (have_rows('tab')) : the_row(); ?>
                                <li class="about-tabs__item <?php if($i == 1){ echo 'active';}?>" data-tab="<?php echo $i;?>"><?php the_sub_field('title_tab');?></li>
                            <?php $i++; endwhile;
                        endif; 
                    ?>
                </ul>
            </nav>
            <ul class="about-tabs__contents">
                <?php $p = 1;  if (have_rows('tab')):
                        while (have_rows('tab')) : the_row();  ?>
                            <li class="about-tabs__content <?php if($p == 1){ echo 'active';}?>" data-tab-content="<?php echo $p;?>">
                                <ul class="sub-tabs">
                                    <?php if (have_rows('images')):
                                            while (have_rows('images')) : the_row(); ?>
                                                <li class="sub-tabs__item" data-src="<?php the_sub_field('img')['url'];?>">
                                                    <img width="314" height="172" src="<?php the_sub_field('img')['url'];?>" alt="<?php the_sub_field('img')['alt'];?>">
                                                </li>                                        
                                            <?php endwhile;
                                        endif; 
                                    ?>                          
                                </ul>
                            </li>
                        <?php $p++; endwhile; 
                    endif; 
                ?>
            </ul>
        </div>
    </div>
</section>