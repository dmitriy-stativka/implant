<?php
//news load more
function news_load_more_scripts()
{
    wp_register_script('loadmore_news', get_template_directory_uri() . '/src/js/loadmore_news.js', array('jquery'));
    wp_enqueue_script('loadmore_news');
}
add_action('wp_enqueue_scripts', 'news_load_more_scripts');
function news_loadmore_ajax_handler()
{
// prepare our arguments for the query
    $args = unserialize(stripslashes($_POST['query']));
    $args['paged'] = $_POST['page'] + 1;
    $args['post_status'] = 'publish';
    $query = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();

            the_title();

        }
    } else {
    }
    wp_reset_postdata();
    die; // here we exit the script and even no wp_reset_query() required!
}
add_action('wp_ajax_loadmore_news', 'news_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore_news', 'news_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}