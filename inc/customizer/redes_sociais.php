<?php

// customizer das redes sociais
function wptema_sociais($wp_customize){
  $add_section = 'redes_sociais';
  $wp_customize->add_section( $add_section, array(
    'title' => 'Redes Sociais',
    'priority' => 31,
  ));

  $var_setting = 'facebook_link';
  $wp_customize->add_setting( $var_setting, array(
    'default' => 'https://www.temawp.com',
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control( $var_setting, array(
    'label'      => 'Facebook',
    'type'   => 'url', // text, checkbox, radio, select, textarea, dropdown-pages, email, url, number, hidden, date
    'section'    => $add_section,
    'settings'   => $var_setting,
  ));

  $var_setting = 'youtube_link';
  $wp_customize->add_setting( $var_setting, array(
    'default' => 'https://www.temawp.com',
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control( $var_setting, array(
    'label'      => 'Youtube',
    'type'   => 'url', // text, checkbox, radio, select, textarea, dropdown-pages, email, url, number, hidden, date
    'section'    => $add_section,
    'settings'   => $var_setting,
  ));

  $var_setting = 'twitter_link';
  $wp_customize->add_setting( $var_setting, array(
    'default' => '',
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control( $var_setting, array(
    'label'      => 'Twitter',
    'type'   => 'url', // text, checkbox, radio, select, textarea, dropdown-pages, email, url, number, hidden, date
    'section'    => $add_section,
    'settings'   => $var_setting,
  ));

  $var_setting = 'google_link';
  $wp_customize->add_setting( $var_setting, array(
    'default' => '',
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control( $var_setting, array(
    'label'      => 'Google+',
    'type'   => 'url', // text, checkbox, radio, select, textarea, dropdown-pages, email, url, number, hidden, date
    'section'    => $add_section,
    'settings'   => $var_setting,
  ));

  $var_setting = 'instagra_link';
  $wp_customize->add_setting( $var_setting, array(
    'default' => 'https://www.temawp.com',
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control( $var_setting, array(
    'label'      => 'Instagram',
    'type'   => 'url', // text, checkbox, radio, select, textarea, dropdown-pages, email, url, number, hidden, date
    'section'    => $add_section,
    'settings'   => $var_setting,
  ));

}
add_action('customize_register', 'wptema_sociais');
