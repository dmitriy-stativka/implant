<section class="article-section">
    <div class="container">

    <?php if ( have_rows( 'section_article_list' ) ) : ?>

        <ul class="article-section__list">
            <?php while ( have_rows( 'section_article_list' ) ) : the_row(); ?>

                <?php $section_article_image = get_sub_field( 'section_article_image' ); ?>

                <?php $liClass = ($section_article_image) ? '' : 'full-row'; ?>

                <li class="article-section__item <?php echo $liClass; ?>">
                    <div class="article-section__item-content">
                         <?php echo get_sub_field( 'section_article_editor' ); ?>
                    </div>

                    <div class="article-section__item-image">
                        
                        <?php if ( $section_article_image ) : ?>
                            <img src="<?php echo esc_url( $section_article_image['url'] ); ?>" 
                            alt="<?php echo esc_attr( $section_article_image['alt'] ); ?>" />
                        <?php endif; ?>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>


    <?php if ( have_rows( 'autor' ) ) : ?>
        <?php while ( have_rows( 'autor' ) ) : the_row(); ?>

        <div class="autor-box">
            <div class="autor-box__image">
                <?php $autor_image = get_sub_field( 'autor_image' );
                if ( $autor_image ) : ?>
                    <img src="<?php echo esc_url( $autor_image['url'] ); ?>" 
                    alt="<?php echo esc_attr( $autor_image['alt'] ); ?>" />
                <?php endif; ?>
            </div>

            <div class="autor-box__inner">
                    <span>
                        <?php pll_e('Автор статьи:'); ?>
                    </span>
            <a class="autor-box__link" href="<?php echo esc_html( get_sub_field( 'autor_link' ) ); ?>">
                <?php echo esc_html( get_sub_field( 'autor_name' ) ); ?>
            </a>

            </div>

           
        </div>
            

        <?php endwhile; ?>
    <?php endif; ?>


    <ul class="medic-list medic-list--grid">

        <?php 
            $args = array(
                'post_type' => 'services',
                'posts_per_page' => -1, 
            );

            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) : 
                while ($the_query->have_posts()) : $the_query->the_post();
                    $doctors = get_field('doctors_list');
                    if ($doctors):
                        foreach ($doctors as $doctor): ?>
                            <li class="medic-list__item">
                                <a href="<?php echo get_permalink($doctor->ID);?>" class="medic-list__inner">
                                    <div class="medic-list__image">
                                        <img width="186" height="205" src="<?php the_field('image', $doctor->ID); ?>"
                                            alt="">
                                    </div>
                                    <div class="medic-list__descr">
                                        <h3 class="medic-list__title"><?php echo get_the_title($doctor->ID); ?></h3>
                                        <h4 class="medic-list__subtitle gradient-title"><?php the_field('position', $doctor->ID); ?></h4>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach;
                    
                
                    endif;

                endwhile;
                wp_reset_postdata();
        
            endif; 
        ?>
    </ul>
    </div>
</section>