<section class="our-find">
        <div class="container">
          <div class="main-top">
            <h2 class="main-top__title gradient-title our-find__title"><?php the_sub_field('title_of_block');?></h2>

            <p class="main-top__text"><?php the_sub_field('desciption');?></p>
          </div>

          <div class="our-find__box">
            <div class="our-find__map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2561.867870560483!2d36.207321215429786!3d50.05130642392571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a6a791d7dcf5%3A0xe3aeab16069411c0!2z0YPQuy4g0JDRhdGB0LDRgNC-0LLQsCwgMTMsINCl0LDRgNGM0LrQvtCyLCDQpdCw0YDRjNC60L7QstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA2MTAwMA!5e0!3m2!1sru!2sua!4v1636566859252!5m2!1sru!2sua" width="640" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="find-contact">
              <a href="/" class="find-contact__logo">
                <picture>
                  <img width="47" height="44" src="<?php the_sub_field('logo')['url'];?>" alt="logo">
                </picture>

                <span class="find-contact__title gradient-title">
                  IMPLANT CENTER
                </span>
              </a>

              <ul class="find-contact__list">
                <li class="find-contact__item">
                  <span class="find-contact__name">
                    АДРЕС :
                  </span>
                  <a href="<?php the_sub_field('link_google');?>" class="find-contact__link"><?php the_sub_field('adress');?></a>
                </li>

                <li class="find-contact__item">
                  <span class="find-contact__name">
                    ТЕЛЕФОН :
                  </span>
                  <a href="tel:<?php the_sub_field('tell');?>" class="find-contact__link"><?php the_sub_field('tell');?></a>
                </li>
              </ul>

              <ul class="find-social">
                  <?php if (have_rows('social')):
                        while (have_rows('social')) : the_row(); ?>
                          <li class="find-social__item">
                              <a href="<?php the_sub_field('link');?>" class="find-social__link">
                                <picture>
                                  <img width="40" height="40" src="<?php the_sub_field('icon')['url'];?>" alt="<?php the_sub_field('icon')['alt'];?>">
                                </picture>
                              </a>
                          </li>
                        <?php endwhile;
                    endif; 
                ?>
              </ul>
            </div>
          </div>
        </div>
      </section>