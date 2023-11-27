<?php
function post_type_blog()
{
  register_post_type('blog', array(
    'labels' => array(
      'name' => 'Блог',
      'singular_name' => 'Блог',
      'add_new' => 'Добавить статью',
      'add_new_item' => 'Добавить новую статью',
      'edit_item' => 'Редактировать статью',
      'new_item' => 'Новая услуга',
      'view_item' => 'Показать статью',
      'search_items' => 'Поиск статью',
      'not_found' => 'Не найдено',
      'not_found_in_trash' => 'Не найдено',
      'parent_item_colon' => '',
      'menu_name' => 'Блог'
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


add_action('init', 'post_type_blog');