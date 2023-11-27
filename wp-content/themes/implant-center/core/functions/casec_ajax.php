<?php
function cases_loadmore_ajax_handler()
{

// prepare our arguments for the query
  $args = unserialize(stripslashes($_POST['query']));
  $args['paged'] = $_POST['page'] + 1;
  $args['post_status'] = 'publish';

  $query = new WP_Query($args);
  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();
      ?>
      <a href="<?php the_permalink(); ?>" class="tab-pane-link">
        <div class="tab-pane-link-content">
          <div class="tab-pane-img">
            <img src="<?php the_field('image_of_cases')['url']; ?>" alt="<?php the_field('image_of_cases')['alt']; ?>">
          </div>

          <div class="tab-pane-info">
            <span class="tab-pane-info-title"><?php the_title(); ?></span>

            <div class="tab-pane-author">

              <img src="<?php the_field('author_image')['url']; ?>" alt="<?php the_field('author_image')['alt']; ?>">
              <div class="tab-pane-author-info">
                <span class="tab-pane-author-name"><?php the_field('author_name') ?></span>
                <i><?php the_field('author_position'); ?></i>
              </div>
            </div>
          </div>
        </div>
      </a>
<?php
    }
  } else {

  }

  wp_reset_postdata();

  die; // here we exit the script and even no wp_reset_query() required!
}

add_action('wp_ajax_loadmore_cases', 'cases_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore_cases', 'cases_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}


?>