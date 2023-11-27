<?php get_header();?>

<section class="mini-sec" style="background-image: url(<?php the_field('image')['url'];?>)">
      <div class="container">
        <h1 class="mini-sec__title">
          IMPLANT CENTER
        </h1>
      </div>
    </section>


    <section class="blog-single-first">
      <div class="container">
        <div class="blog-single-first__cart">
          <div class="blog-single-first__image">
              <img width="1024" height="391" src="<?php the_field('image')['url'];?>" alt="<?php the_field('image')['alt'];?>">
          </div>

          <div class="blog-single-first__body">
            <div class="blog-single-first__wrapper">
              <h2 class="blog-single-first__title"><?php the_title();?></h2>


            <div class="blog-single-first__text">
                <?php the_content();?>
            </div>


              <button data-btn="questions" class="blog-single-first__button transparent-btn"><?php the_field('text_button');?></button>
            </div>
          </div>

        </div>
      </div>
    </section>



    <?php
        $next_post_obj  = get_adjacent_post( '', '', false );
        $next_post_ID   = isset( $next_post_obj->ID ) ? $next_post_obj->ID : '';
        $next_post_link     = get_permalink( $next_post_ID );
        $next_post_title    = get_the_title($next_post_ID);

        $previous_post_obj  = get_adjacent_post( $in_same_cat = false, $excluded_categories = '', $previous = true );
        $previous_post_ID   = isset( $previous_post_obj->ID ) ? $previous_post_obj->ID : '';
        $previous_post_link     = get_permalink( $previous_post_ID );
        $previous_post_title    = get_the_title($previous_post_ID);
    ?>


    <section class="blog-single-second">
      <div class="container">

        <h2 class="blog-single-second__title">
          ПОХОЖИЕ СТАТЬИ
        </h2>

        <ul class="blog-list">
          <li class="blog-item blog-single-second__item">
            <a href="<?php echo $previous_post_link; ?>">

                <div class="blog-item__image">
                    <img src="<?php the_field('image', $previous_post_ID)['url'];?>" alt="<?php the_field('image', $previous_post_ID)['alt'];?>">
                </div>
                <div class="blog-item__body">
                    <h3 class="blog-item__title"><?php echo $previous_post_title; ?></h3>
                    <p class="blog-item__text"><?php the_field('mini_desc', $previous_post_ID);?></p>
                    <div class="blog-item__bottom">
                        <span class="blog-item__date"><?php echo get_the_date('d.m.Y', $previous_post_ID); ?></span>
                        <a href="#" class="blog-item__link">
                            ПОДРОБНЕЕ
                        </a>
                    </a>
              </div>
            </div>
          </li>


          <li class="blog-item blog-single-second__item">
            <a href="<?php echo $next_post_link; ?>">

                <div class="blog-item__image">
                    <img src="<?php the_field('image', $next_post_ID)['url'];?>" alt="<?php the_field('image', $next_post_ID)['alt'];?>">
                </div>
                <div class="blog-item__body">
                    <h3 class="blog-item__title"><?php echo $next_post_title; ?></h3> 
                    <p class="blog-item__text"><?php the_field('mini_desc', $next_post_ID);?></p>
                    <div class="blog-item__bottom">
                        <span class="blog-item__date"><?php echo get_the_date('d.m.Y', $next_post_ID); ?></span>
                        <span class="blog-item__link">ПОДРОБНЕЕ</span>
                    </div>
                </div>
            </a>
          </li>
        </ul>
      </div>
    </section>


<?php if (have_rows('page_builder')):
        while (have_rows('page_builder')) : the_row();
            get_template_part( 'template_parts/' . get_row_layout());
        endwhile;
    endif; 
?>
<?php get_footer();?>