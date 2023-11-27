<section class="about__section">
    <div class="container">
        <div class="about__section-inner">
            <div class="about__section-image">
            <?php
$about_section_image = get_sub_field( 'about_section_image' );
if ( $about_section_image ) : ?>
	<img src="<?php echo esc_url( $about_section_image['url'] ); ?>" alt="<?php echo esc_attr( $about_section_image['alt'] ); ?>" />
<?php endif; ?>
            </div>

            <div class="about__section-text">
            <?php echo get_sub_field( 'about_section_editor' ); ?>
            </div>

        </div>

    </div>
</section>