
<?php
    $formReviews = get_sub_field('shortcode_form');
    $reviews = get_sub_field('shortcode_reviews');  
?>

<section class="mini-sec" style="background-image: url(<?php the_sub_field('bg_img')['url'];?>)">
    <div class="container">
        <div class="mini-sec__box">
          <h2 class="mini-sec__title"><?php the_title();?></h2>
          <button class="mini-sec__button transparent-btn" data-btn="reviews"><?php the_sub_field('text_button');?></button>
        </div>
    </div>
</section>





<section class="reviews-sec">
    <div class="container-mode container-mode--translate">
           <?php echo do_shortcode($reviews);?>
    </div>
</section>

<div class="overlay">
    <div class="modals-wrapper">
        <div class="modal"  data-modal="review">
            <div class="modal__top">
                <h2 class="modal__title">
                    <?php the_sub_field('text_button');?>
                </h2>
            </div>
            <div class="modal__icon">
                <picture>
                    <img width="40" height="40" src="<?php echo get_stylesheet_directory_uri(); ?>/img/form-icon.svg" alt="icon">
                </picture>
            </div>
            <?php echo do_shortcode($formReviews);?>
        </div>
    </div>
</div>
    

