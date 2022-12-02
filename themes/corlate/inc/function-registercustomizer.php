<?php 


/*Making the section panel  for the contact to add shortcode*/
function corlate_icon_and_phonenumber($wp_customize)
{

  $wp_customize->add_section('corlate_section_phone_icon', array(
    'title'      => 'Phone Number and icon',
    'discription' => __('To change phone Number and Icon'),
    'priority'   => 0,
  ));
 
//   for contact shortcode
  $wp_customize->add_setting('phone_icon', array(
    'default' => __(' '),
  ));

  $wp_customize->add_control('phone_icon', array(
    'label'      => 'Add Phone Icon',
    'section' => 'corlate_section_phone_icon',
    'priority'   => 1,
    'type' => 'text',
  ));

  /** For map image */
  $wp_customize->add_setting('phone_number', array(
    'default' => __(' '),
  ));

  $wp_customize->add_control('phone_number', array(
    'label'      => 'Add Phone Number',
    'section' => 'corlate_section_phone_icon',
    'priority'   => 2,
    'type' => 'text',
  ));

 

} //end of theme_cutomizer_function_mytest

add_action('customize_register', 'corlate_icon_and_phonenumber');?>