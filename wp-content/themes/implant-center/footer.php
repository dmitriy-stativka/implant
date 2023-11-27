<!-- </div> -->
<!-- End bg-wrapper -->
</main>
<footer>
    <div class="container container--footer">
        <div class="footer-box">
            <div class="footer">
                <div class="footer-info">
                <a href="/" class="footer-logo">
                    <picture>
                        <source type='image/webp' srcset='<?php echo get_template_directory_uri();?>/img/logo.webp'>
                        <img width='30' height='31' src='<?php echo get_template_directory_uri();?>/img/logo.png' alt='logo'>
                    </picture>
                    <span class="footer-logo__title">IMPLANT CENTER</span>
                </a>

                <ul class="header-phones footer-phones">
                    <li class="header-phones__item">
                        <a href="tel:<?php the_field('tell1', 'options');?>" class="header-phones__link"><?php the_field('tell1', 'options');?></a>
                    </li>
                    <li class="header-phones__item">
                        <a href="tel:<?php the_field('tell2', 'options');?>" class="header-phones__link"><?php the_field('tell2', 'options');?></a>
                    </li>
                </ul>

                </div>

                <div class="footer-lists">

                  <?php
                      $lang = pll_current_language();
                      wp_nav_menu([
                          'theme_location' => '',
                          'menu' => 'footer-menu' . '-' . $lang,
                          'container' => '',
                          'container_class' => '',
                          'container_id' => '',
                          'menu_class' => 'footer-menu' . '-' . $lang,
                          'menu_id' => '',
                          'echo' => true,
                          'fallback_cb' => 'wp_page_menu',
                          'before' => '',
                          'after' => '',
                          'link_before' => '',
                          'link_after' => '',
                          'items_wrap' => '<ul id="%1$s" class="footer-nav %2$s">%3$s</ul>',
                          'depth' => 0,
                          'walker' => new description_walker(),
                      ]);
                  ?>
                </div>

            </div>

            <span class="botton-info"><?php the_field('copywriter_footer', 'options');?></span>
        </div>
    </div>
    </footer>


    <div class="overlay">
      <div class="modals-wrapper">
        <div class="modal" data-modal="questions">
          <div class="modal__top">
            <h2 class="modal__title">
              <?php pll_e('ОСТАЛИСЬ ВОПРОСЫ?'); ?>
            </h2>
            <p class="modal__text">
                <?php pll_e('Напишите нам и мы перезвоним'); ?>
            </p>
          </div>
          <div class="modal__icon">
            <picture>
              <img width="40" height="40" src="<?php echo get_stylesheet_directory_uri(); ?>/img/form-icon.svg" alt="icon">
            </picture>
          </div>

            <?php $lang = pll_current_language(); 
                if($lang == "ru"){
                    echo do_shortcode('[contact-form-7 id="144" title="Form block"]');
                }else{
                    echo do_shortcode('[contact-form-7 id="1890" title="Footer popup ua"]');
                }
            ?>
        </div>

        <div class="modal"  data-modal="review">
          <?php echo do_shortcode($formReviews);?>
        </div>
      </div>

      <span class="close-overlay">
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 256 256"><path fill="#fff" stroke-miterlimit="10" d="M7 4a.995.995 0 0 0-.707.293l-2 2a.999.999 0 0 0 0 1.414L11.586 15l-7.293 7.293a.999.999 0 0 0 0 1.414l2 2a.999.999 0 0 0 1.414 0L15 18.414l7.293 7.293a.999.999 0 0 0 1.414 0l2-2a.999.999 0 0 0 0-1.414L18.414 15l7.293-7.293a.999.999 0 0 0 0-1.414l-2-2a.999.999 0 0 0-1.414 0L15 11.586 7.707 4.293A.996.996 0 0 0 7 4z" font-family="none" font-size="none" font-weight="none" style="mix-blend-mode:normal" text-anchor="none" transform="scale(8.53333)"/></svg>
      </span>
    </div>

    <script>
        const closeOverlay = document.querySelector('.close-overlay');
        const overlay = document.querySelector('.overlay');
        const questionsModal = document.querySelector('[data-modal="questions"]');


            if(closeOverlay){
                closeOverlay.addEventListener('click', function() {
                overlay.classList.remove('active');
                questionsModal.classList.remove('active');
            });
        }
    </script>

    <style>
        .close-overlay{
            position: absolute;
            top: 25px;
            right: 25px;
            cursor: pointer;
         
        }

        .close-overlay svg{
            width: 25px;
            height: 25px;
        }
    </style>


<?php wp_footer(); ?>
</body>
</html>