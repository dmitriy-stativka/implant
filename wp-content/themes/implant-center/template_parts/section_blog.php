<section class="blog-sec">
      <div class="container container--blog">
        <div class="blog-list">
            <?php
                $params = array(
                    'post_type' => 'blog',
                    'posts_per_page' => -1,
                );
                $query = new WP_Query( $params );
                ?>
                <?php if($query->have_posts()): ?>
                    <?php while ($query->have_posts()): $query->the_post() ?>
                        
                    <a href="<?php echo get_the_permalink();?>" class="blog-item blog-list__item">
                        <div class="blog-item__image blog-list__image">
                            <img width="367" height="266" src="<?php the_field('image')['url'];?>" alt="<?php the_field('image')['alt'];?>">
                        </div>
                        <div class="blog-item__body">
                            <h3 class="blog-item__title"><?php the_title();?></h3>
                            <p class="blog-item__text"><?php the_field('mini_desc');?> </p>
                            <div class="blog-item__bottom">
                                <span class="blog-item__date"><?php echo get_the_date('d.m.Y');?></span>
                                <span href="blog-single.html" class="blog-item__link">Подробнее</span>
                            </div>
                        </div>
                    </a>


                    <?php endwhile; ?>
                <?php endif; 
            ?> 
        </div>
      </div>
</section>
<?php wp_reset_postdata();?>