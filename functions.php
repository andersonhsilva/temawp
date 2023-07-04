<?php

// inclui as funções do customizer para o tema
require(get_template_directory() . '/inc/customizer/copyright.php');
require(get_template_directory() . '/inc/customizer/redes_sociais.php');
require(get_template_directory() . '/inc/customizer/contato_site.php');

// habilita recursos ao tema wordpress
function temawp_config()
{
  register_nav_menus(
    array(
      'menu_primary' => 'Menu primário para o topo da página',
      'menu_secondary' => 'Menu para o rodapé da página',
    )
  );
  add_theme_support('custom-header', array('width' => 1920, 'height' => 300,));
  add_theme_support('post-thumbnails');
  add_theme_support('post-formats', array('video', 'image'));
  add_theme_support('title-tag');
  add_theme_support('custom-logo', array('width' => 360, 'height' => 113));
  add_theme_support('menus');
}
add_action('after_setup_theme', 'temawp_config');

// registra o(s) widget(s) do site
function temawp_sidebars()
{
  register_sidebar(array(
    'name' => 'Rodapé 1',
    'id' => 'widget-1',
    'description' => 'widget usado no rodape do site',
    'before_widget' => '<span class="widget_custom">',
    'after_widget' => '</span>',
    'before_title' => '<span>',
    'after_title' => '</span>',
  ));
  register_sidebar(array(
    'name' => 'Rodapé 2',
    'id' => 'widget-2',
    'description' => 'widget usado no rodape do site',
    'before_widget' => '<span class="widget_custom">',
    'after_widget' => '</span>',
    'before_title' => '<span>',
    'after_title' => '</span>',
  ));
  register_sidebar(array(
    'name' => 'Rodapé 3',
    'id' => 'widget-3',
    'description' => 'widget usado no rodape do site',
    'before_widget' => '<span class="widget_custom">',
    'after_widget' => '</span>',
    'before_title' => '<span>',
    'after_title' => '</span>',
  ));
  register_sidebar(array(
    'name' => 'Rodapé 4',
    'id' => 'widget-4',
    'description' => 'widget usado no rodape do site',
    'before_widget' => '<span class="widget_custom">',
    'after_widget' => '</span>',
    'before_title' => '<span>',
    'after_title' => '</span>',
  ));
}
add_action('widgets_init', 'temawp_sidebars');

// remove a logo do wordpress no login de administração do site
function custom_login_logo()
{
  $custom_logo_id = get_theme_mod('custom_logo');
  $image = wp_get_attachment_image_src($custom_logo_id, 'full');
  echo '<style type="text/css">.login h1 a { display: none; !important; }</style>';
}
add_action('login_head', 'custom_login_logo');
