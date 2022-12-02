<?php
/*Making the section panel Footer setting where we can enter the text and select the image*/
function theme_customizer_function_mytest($wp_customize)
{

  $wp_customize->add_section('pluton_section_skills', array(
    'title'      => 'Skills',
    'discription' => __('To change skills'),
    'priority'   => 300,
  ));
 
//   for facebook link
  $wp_customize->add_setting('pluton_setting_graphic_design', array(
    'default' => __('50%'),
  ));

  $wp_customize->add_control('pluton_setting_graphic_design', array(
    'label'      => 'Graphic Design percent',
    'section' => 'pluton_section_skills',
    'priority'   => 1,
    'type' => 'text',
  ));

  /** For facebook image */
  $wp_customize->add_setting('pluton_setting_html_css', array(
    'default' => __('60%'),
  ));

  $wp_customize->add_control('pluton_setting_html_css', array(
    'label'      => 'Html and CSS percent',
    'section' => 'pluton_section_skills',
    'priority'   => 1,
    'type' => 'text',
  ));

//   for twitter link
  $wp_customize->add_setting('pluton_setting_jquery', array(
    'default' => __('70%'),
  ));

  $wp_customize->add_control('pluton_setting_jquery', array(
    'label'      => 'Jquery percent',
    'section' => 'pluton_section_skills',
    'priority'   => 2,
    'type' => 'text',
  ));

  /** For the image */
  $wp_customize->add_setting('pluton_setting_wordpress', array(
    'default' => __('80%'),
  ));

  $wp_customize->add_control('pluton_setting_wordpress', array(
    'label'      => 'Wordpress percent',
    'section' => 'pluton_section_skills',
    'priority'   => 2,
    'type' => 'text',
  ));


} //end of theme_cutomizer_function_mytest

add_action('customize_register', 'theme_customizer_function_mytest');


/*Making the section panel  for the contact to add shortcode*/
function pluton_customizer_function_contact($wp_customize)
{

  $wp_customize->add_section('pluton_section_contact', array(
    'title'      => 'Contact form ',
    'discription' => __('To change contact'),
    'priority'   => 300,
  ));
 
//   for contact shortcode
  $wp_customize->add_setting('pluton_setting_contact_shortcode', array(
    'default' => __(' '),
  ));

  $wp_customize->add_control('pluton_setting_contact_shortcode', array(
    'label'      => 'Add contact form Shortcode',
    'section' => 'pluton_section_contact',
    'priority'   => 1,
    'type' => 'text',
  ));

  /** For map image */
  $wp_customize->add_setting('pluton_setting_image_url', array(
    'default' => __(' '),
  ));

  $wp_customize->add_control('pluton_setting_image_url', array(
    'label'      => 'Add image link',
    'section' => 'pluton_section_contact',
    'priority'   => 2,
    'type' => 'textarea',
  ));

  //for address
  $wp_customize->add_setting('pluton_setting_address', array(
    'default' => __('123 Fifth Avenue, 12th,Belgrade,SRB 11000'),
  ));

  $wp_customize->add_control('pluton_setting_address', array(
    'label'      => 'Your Address',
    'section' => 'pluton_section_contact',
    'priority'   => 3,
    'type' => 'textarea',
  ));

  /** For email */
  $wp_customize->add_setting('pluton_setting_email', array(
    'default' => __('ourstudio@somemail.com'),
  ));

  $wp_customize->add_control('pluton_setting_email', array(
    'label'      => 'Your Email ',
    'section' => 'pluton_section_contact',
    'priority'   => 4,
    'type' => 'textarea',
  ));

 //for contact number 1
  $wp_customize->add_setting('pluton_setting_contact_number1', array(
    'default' => __('+11 234 567 890'),
  ));

  $wp_customize->add_control('pluton_setting_contact_number1', array(
    'label'      => 'Your contact number',
    'section' => 'pluton_section_contact',
    'priority'   => 5,
    'type' => 'text',
  ));

  /** For contact number 2 */
  $wp_customize->add_setting('pluton_setting_contact_number2', array(
    'default' => __('+11 286 543 850'),
  ));

  $wp_customize->add_control('pluton_setting_contact_number2', array(
    'label'      => 'Your Second Contact number',
    'section' => 'pluton_section_contact',
    'priority'   => 6,
    'type' => 'text',
  ));

    /** For Title */
    $wp_customize->add_setting('pluton_setting_contact_title', array(
      'default' => __('We Are Social'),
    ));
  
    $wp_customize->add_control('pluton_setting_contact_title', array(
      'label'      => 'Your Contact Title ',
      'section' => 'pluton_section_contact',
      'priority'   => 7,
      'type' => 'textarea',
    ));
  

} //end of theme_cutomizer_function_mytest

add_action('customize_register', 'pluton_customizer_function_contact');