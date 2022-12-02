<?php
/*Making the section panel Footer setting where we can enter the text and select the image*/
function theme_customizer_function_mytest($wp_customize)
{

  $wp_customize->add_section('moderna_section_footer_setting', array(
    'title'      => 'Footer setting',
    'discription' => __('To change text header'),
    'priority'   => 500,
  ));
 
//   for facebook link
  $wp_customize->add_setting('moderna_setting_facebook_link', array(
    'default' => __('clean and unique'),
  ));

  $wp_customize->add_control('moderna_setting_facebook_link', array(
    'label'      => 'Fackbook link',
    'section' => 'moderna_section_footer_setting',
    'priority'   => 1,
    'type' => 'text',
  ));

  /** For facebook image */
  $wp_customize->add_setting('moderna_setting_facebook_image', array(
    'default' => __(' '),
  ));

  $wp_customize->add_control('moderna_setting_facebook_image', array(
    'label'      => 'Fackbook icon',
    'section' => 'moderna_section_footer_setting',
    'priority'   => 1,
    'type' => 'text',
  ));

//   for twitter link
  $wp_customize->add_setting('moderna_setting_twitter_link', array(
    'default' => __(''),
  ));

  $wp_customize->add_control('moderna_setting_twitter_link', array(
    'label'      => 'Twitter link',
    'section' => 'moderna_section_footer_setting',
    'priority'   => 2,
    'type' => 'text',
  ));

  /** For the image */
  $wp_customize->add_setting('moderna_setting_twitter_image', array(
    'default' => __(' '),
  ));

  $wp_customize->add_control('moderna_setting_twitter_image', array(
    'label'      => 'Twitter icon',
    'section' => 'moderna_section_footer_setting',
    'priority'   => 2,
    'type' => 'text',
  ));

  //   for linkedin link
  $wp_customize->add_setting('moderna_setting_linkedin_link', array(
    'default' => __(''),
  ));

  $wp_customize->add_control('moderna_setting_linkedin_link', array(
    'label'      => 'linkedin link',
    'section' => 'moderna_section_footer_setting',
    'priority'   => 2,
    'type' => 'text',
  ));

  /** For the linkedin image */
  $wp_customize->add_setting('moderna_setting_linkedin_image', array(
    'default' => __(' '),
  ));

  $wp_customize->add_control('moderna_setting_linkedin_image', array(
    'label'      => 'linkedin icon',
    'section' => 'moderna_section_footer_setting',
    'priority'   => 2,
    'type' => 'text',
  ));

    //   for pinterest link
    $wp_customize->add_setting('moderna_setting_pinterest_link', array(
      'default' => __(''),
    ));
  
    $wp_customize->add_control('moderna_setting_pinterest_link', array(
      'label'      => 'pinterest link',
      'section' => 'moderna_section_footer_setting',
      'priority'   => 3,
      'type' => 'text',
    ));
  
    /** For the pinterest image */
    $wp_customize->add_setting('moderna_setting_pinterest_image', array(
      'default' => __(' '),
    ));
  
    $wp_customize->add_control('moderna_setting_pinterest_image', array(
      'label'      => 'pinterest icon',
      'section' => 'moderna_section_footer_setting',
      'priority'   => 3,
      'type' => 'text',
    ));

  
 
} //end of theme_cutomizer_function_mytest

/** add action callback the function theme_customizer_function_mytest */
add_action('customize_register', 'theme_customizer_function_mytest');