<?php

// customizer do copyright
function wptema_copyright($wp_customize){
  $add_section = 'copyright';
  $wp_customize->add_section( $add_section, array(
    'title' => 'Copyright',
    'priority' => 30,
  ));

  $var_setting = 'footer_copyright';
  $wp_customize->add_setting( $var_setting, array(
    'default' => 'Copyright © - Todos os direitos reservados.',
  ));
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'copyright_text', array(
    'label' => 'Copyright',
    'type'   => 'text', // text, checkbox, radio, select, textarea, dropdown-pages, email, url, number, hidden, date
    'section' => $add_section,
    'settings' => $var_setting,
  )));

}
add_action('customize_register', 'wptema_copyright');
