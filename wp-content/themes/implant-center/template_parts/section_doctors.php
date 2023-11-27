<section class="single-doctor">
    <div class="container">
        <div class="single-doctor__inner">


        <?php if ( have_rows( 'doctor_info' ) ) : ?>
            <ul class="single-doctor__info">
                <?php while ( have_rows( 'doctor_info' ) ) : the_row(); ?>
                <li class="single-doctor__info-item">
                    <h2 class="single-doctor__title">
                        <?php echo esc_html( get_sub_field( 'doctor_info_title' ) ); ?>
                    </h2>
                    

                    <?php if ( have_rows( 'doctor_info_items' ) ) : ?>
                        <ul class="single-doctor__points">
                            <?php while ( have_rows( 'doctor_info_items' ) ) :
                                the_row(); ?>
                                <li class="single-doctor__points-item">
                                    <p>
                                    <?php echo esc_html( get_sub_field( 'doctor_info_text' ) ); ?>
                                    </p>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </li>

                <?php endwhile; ?>
            </ul>
        <?php endif; ?>


        <div class="single-doctor__slider">
            <h2 class="single-doctor__title">
                <?php echo esc_html( get_sub_field( 'doctor_slider_title' ) ); ?>
            </h2>
            <?php if ( have_rows( 'doctor_slider' ) ) : ?>
            <div class='swiper-container'>
                <ul class='swiper-wrapper'>
                    <?php while ( have_rows( 'doctor_slider' ) ) : the_row(); ?>
                        <li data-src="<?php echo get_sub_field( 'doctor_slider_img_big'); ?>" class='swiper-slide'>
                            <?php $doctor_slider_image = get_sub_field( 'doctor_slider_image' );
                                if ( $doctor_slider_image ) : ?>
                                <img src="<?php echo esc_url( $doctor_slider_image['url'] ); ?>" 
                                alt="<?php echo esc_attr( $doctor_slider_image['alt'] ); ?>" />
                            <?php endif; ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
            
            <nav class="slider-nav">
                <button class="slider-nav__left single-doctor__prev">
                <svg width="16" height="8">
                    <use href="<?php echo get_template_directory_uri();?>/img/sprite/sprite.svg#arrow-prev"></use>
                </svg>
                </button>

                <button class="slider-nav__right single-doctor__next">
                <svg width="16" height="8">
                    <use href="<?php echo get_template_directory_uri();?>/img/sprite/sprite.svg#arrow-next"></use>
                </svg>
                </button>
            </nav>
            <?php endif; ?>
        </div>


        




     





        


                                
        

        </div>
    </div>
</section>