<section class="contact-sec">
      <div class="container-mode container-mode--translate">
        <div class="contact-sec__box">
          <ul class="contact-sec__list">
              <li class="contact-sec__item">
                <h2 class="contact-sec__title">
                  <?php pll_e('Телефон:'); ?>

                  <span class="contact-sec__icon">
                    <?php $tel_icon = get_field( 'tel_icon', 'options' );
                    if ( $tel_icon ) : ?>
                      <img width="35" height="35" src="<?php echo esc_url( $tel_icon['url'] ); ?>" 
                      alt="<?php echo esc_attr( $tel_icon['alt'] ); ?>" />
                    <?php endif; ?>
                  </span>
                </h2>
                <ul class="contact-sec__sub-list">
                  <li class="contact-sec__sub-item">
                    <a href="tel:<?php the_field('tell1', 'options');?>" class="contact-sec__sub-link"><?php the_field('tell1', 'options');?></a>
                  </li>
                  <li class="contact-sec__sub-item">
                    <a href="tel:<?php the_field('tell2', 'options');?>" class="contact-sec__sub-link"><?php the_field('tell2', 'options');?></a>
                  </li>
                </ul>
              </li>
              <li class="contact-sec__item">
                <h2 class="contact-sec__title">
                <?php pll_e('Адрес:'); ?>
                  <span class="contact-sec__icon">
                  <?php $tel_icon = get_field( 'adres_icon', 'options' );
                    if ( $tel_icon ) : ?>
                      <img width="35" height="35" src="<?php echo esc_url( $tel_icon['url'] ); ?>" 
                      alt="<?php echo esc_attr( $tel_icon['alt'] ); ?>" />
                    <?php endif; ?>
                  </span>
                </h2>
                <ul class="contact-sec__sub-list">
                  <li class="contact-sec__sub-item">
                    <a href="#" class="contact-sec__sub-link"><?php the_field('address', 'options');?></a>
                  </li>
                </ul>
              </li>

              <li class="contact-sec__item">
                <h2 class="contact-sec__title">
                <?php pll_e('Почта:'); ?>
                  <span class="contact-sec__icon">
                    <?php $tel_icon = get_field( 'mail_icon', 'options' );
                      if ( $tel_icon ) : ?>
                        <img width="35" height="35" src="<?php echo esc_url( $tel_icon['url'] ); ?>" 
                        alt="<?php echo esc_attr( $tel_icon['alt'] ); ?>" />
                      <?php endif; ?>
                  </span>
                </h2>
                <ul class="contact-sec__sub-list">
                  <li class="contact-sec__sub-item">
                    <a href="mailto:<?php the_field('mail', 'options');?>" class="contact-sec__sub-link"><?php the_field('mail', 'options');?></a>
                  </li>
                </ul>
              </li>
          </ul>

          <div class="contact-sec__map">
            <!-- <iframe src="<?php the_field('iframe_src', 'options');?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1280.7366778688718!2d36.1988153017665!3d50.058696167850925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a5f4b559d1e9%3A0x33a0eddd78123484!2sImplant%20center!5e0!3m2!1sru!2sua!4v1684229401316!5m2!1sru!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </section>