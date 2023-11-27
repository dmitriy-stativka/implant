<?php
add_image_size('full_hd', 1920, 1080);

add_action( 'wp_enqueue_scripts', function(){
    if (is_admin()) return; // don't dequeue on the backend
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery',  get_stylesheet_directory_uri() . '/src/js/vendor/jquery-3.2.1.min.js', array(), null, false );

    wp_register_script( 'gsap1', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js', array(), null, false );
    wp_register_script( 'gsap2', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollToPlugin.min.js', array(), null, false );
    wp_register_script( 'gsap3', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js', array(), null, false );
    wp_register_script( 'swiper', get_template_directory_uri() . '/src/js/vendor/swiper.min.js', array(), null, false );
    wp_register_script( 'lightbox', get_template_directory_uri() . '/src/js/vendor/lightbox.js', array(), null, false );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'gsap1');
    wp_enqueue_script( 'gsap2');
    wp_enqueue_script( 'gsap3');
    wp_enqueue_script( 'swiper');

});

function global_scripts() {

  wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/build/style.css', array());
  wp_enqueue_script('bundle', get_template_directory_uri() . '/build/bundle.js', array('jquery'));

  wp_localize_script('bundle', 'ajaxurl', array(
    'url' => admin_url('admin-ajax.php')
  ));
}

add_action('wp_enqueue_scripts', 'global_scripts');
add_theme_support( 'custom-logo', array() );

function remove_head_scripts()
{
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
    remove_action('wp_head', 'wp_print_styles', 99);
    remove_action('wp_head', 'wp_enqueue_style', 99);

    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
    add_action('wp_head', 'wp_print_styles', 30);
    add_action('wp_head', 'wp_enqueue_style', 30);
}

add_action('wp_enqueue_scripts', 'remove_head_scripts');


show_admin_bar(false);


add_theme_support('menus');

// SVG support
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


// ACF Options page
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}


function remove_menus(){
    remove_menu_page( 'edit.php' ); //Posts
    remove_menu_page( 'edit-comments.php' ); //Comments

}
add_action( 'admin_menu', 'remove_menus' );


add_action( 'after_setup_theme', 'wpse_theme_setup' );
function wpse_theme_setup() {
    add_theme_support( 'title-tag' );
}


add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
function form_submit_button( $button, $form ) {
    return "<button class='button gform_button btnBudget' id='gform_submit_button_{$form['id']}'><span>Request an Invite</span></button>";
}

class description_walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth, $args)
    {
        global $wp_query;
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $class_names = $value = '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $output .= $indent . '<li class="nav__item">';


        $attributes  = !empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url)        ? ' href="'   . esc_attr($item->url) . '"' : '';

        $prepend = '<strong>';
        $append = '</strong>';


        if ($depth != 0) {
            $description = $append = $prepend = '';
        }

        $item_output = $args->before;
        $item_output .= '<a class="nav__link"' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID);
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}


pll_register_string('ЗАПИСАТЬСЯ НА ПРИЕМ', 'callback');

pll_register_string('Contacts-title', 'Телефон:');
pll_register_string('Contacts-title', 'Адрес:');
pll_register_string('Contacts-title', 'Почта:');
pll_register_string('Autor string', 'Автор статьи:');
pll_register_string('popup-questions', 'ОСТАЛИСЬ ВОПРОСЫ?');
pll_register_string('call-us', 'Напишите нам и мы перезвоним');


function custom_post_type_doctors() {
    $labels = array(
        'name' => 'doctors',
        'singular_name' => 'Врач',
        'menu_name' => 'Врачи',
        'add_new' => 'Добавить нового врача',
        'add_new_item' => 'Добавить нового врача',
        'edit_item' => 'Редактировать врача',
        'new_item' => 'Новый врач',
        'view_item' => 'Просмотреть врача',
        'search_items' => 'Искать врача',
        'not_found' => 'Врачи не найдены',
        'not_found_in_trash' => 'Врачи не найдены в корзине',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'doctors'),
        'menu_icon' => 'dashicons-id',
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('doctors', $args);
}

add_action('init', 'custom_post_type_doctors');





require_once( __DIR__ . '/core/core.php');