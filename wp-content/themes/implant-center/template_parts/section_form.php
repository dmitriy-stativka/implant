<section class="form-section" style="background-image: url(<?php the_sub_field('bg')['url'];?>);">
      <div class="container">
        <div class="main-top">
          <h2 class="main-top__title form-section__title"><?php the_sub_field('title');?></h2>

          <p class="main-top__text form-section__text"><?php the_sub_field('subtitle');?></p>
        </div>

        <div class="form-section__box">
 
            <?php $shortcode = get_sub_field("shortcode");?>
            <?php echo do_shortcode( $shortcode . "");?>
  
        </div>
      </div>
  </section>