<?php
function post_type_cases()
{
  register_post_type('services', array(
    'labels' => array(
      'name' => 'Услуги',
      'singular_name' => 'Услуги',
      'add_new' => 'Добавить услугу',
      'add_new_item' => 'Добавить новую услугу',
      'edit_item' => 'Рeдактировать услугу',
      'new_item' => 'Новая услуга',
      'view_item' => 'Показать услугу',
      'search_items' => 'Поиск услуги',
      'not_found' => 'Не найдено',
      'not_found_in_trash' => 'Не найдено',
      'parent_item_colon' => '',
      'menu_name' => 'Услуги'
    ),
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title', 'editor', 'comments', 'thumbnail', 'excerpt', 'custom-fields', 'category', 'page-attributes')
  ));

}


add_action('init', 'post_type_cases');