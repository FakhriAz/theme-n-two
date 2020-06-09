<?php
function n_two_customize_register($wp_customize)
{
  // Showcase Section
  $wp_customize->add_section('showcase_2', array(
    'title'   => __('Showcase Column 2 Image Cover', 'n_two'),
    'description' => sprintf(__('Options for showcase_2', 'n_two')),
    'priority'    => 150
  ));

  $wp_customize->add_setting('showcase_2_image', array(
    'default'   => get_bloginfo('template_directory') . '/img/showcase.jpg',
    'type'      => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
    'label'   => __('Showcase Image', 'n_two'),
    'section' => 'showcase_2',
    'settings' => 'showcase_2_image',
    'priority'  => 1
  )));

  // 3 images in col 1 start 

  $wp_customize->add_section('showcase_1_img', array(
    'title'   => __('Showcase Column 1 images ', 'n_two'),
    'description' => sprintf(__('Options for showcase', 'n_two')),
    'priority'    => 140,
  ));

  $wp_customize->add_setting('small_image1', array(
    'default'   => get_bloginfo('template_directory') . '/img/lunch-1.jpg',
    'type'      => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'small_image1', array(
    'label'   => __('Rounded image 1', 'n_two'),
    'section' => 'showcase_1_img',
    'settings' => 'small_image1',
    'priority'  => 3
  )));

  $wp_customize->add_setting('showcase_1img1_text', array(
    'default'   => _x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam', 'n_two'),
    'type'      => 'theme_mod'
  ));

  $wp_customize->add_control('showcase_1img1_text', array(
    'label'   => __('Text', 'n_two'),
    'section' => 'showcase_1_img',
    'priority'  => 4
  ));
  // img 1 & text 1 done

  //Image 2 & text 2 starts
  $wp_customize->add_setting('small_image2', array(
    'default'   => get_bloginfo('template_directory') . '/img/lunch-2.jpg',
    'type'      => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'small_image2', array(
    'label'   => __('Rounded image 2', 'n_two'),
    'section' => 'showcase_1_img',
    'settings' => 'small_image2',
    'priority'  => 5
  )));

  $wp_customize->add_setting('showcase_2img2_text', array(
    'default'   => _x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam', 'n_two'),
    'type'      => 'theme_mod'
  ));

  $wp_customize->add_control('showcase_2img2_text', array(
    'label'   => __('Text', 'n_two'),
    'section' => 'showcase_1_img',
    'priority'  => 6
  ));
  // image 2 & text done

  // Image 3 & text 3 starts
  $wp_customize->add_setting('small_image3', array(
    'default'   => get_bloginfo('template_directory') . '/img/lunch-3.jpg',
    'type'      => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'small_image3', array(
    'label'   => __('Rounded image 3', 'n_two'),
    'section' => 'showcase_1_img',
    'settings' => 'small_image3',
    'priority'  => 7
  )));

  $wp_customize->add_setting('showcase_3img3_text', array(
    'default'   => _x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam', 'n_two'),
    'type'      => 'theme_mod'
  ));

  $wp_customize->add_control('showcase_3img3_text', array(
    'label'   => __('Text', 'n_two'),
    'section' => 'showcase_1_img',
    'priority'  => 8
  ));

  // img 3 & text 3 done


  // 3 images in col1 & text ends here

  $wp_customize->add_section('showcase_1', array(
    'title'   => __('Showcase Column 1 Text Only', 'n_two'),
    'description' => sprintf(__('Options for showcase', 'n_two')),
    'priority'    => 135
  ));

  $wp_customize->add_setting('showcase_1_heading', array(
    'default'   => _x('Custom Wordpress Theme', 'n_two'),
    'type'      => 'theme_mod'
  ));

  $wp_customize->add_control('showcase_1_heading', array(
    'label'   => __('Heading', 'n_two'),
    'section' => 'showcase_1',
    'priority'  => 3
  ));

  $wp_customize->add_setting('showcase_1_text', array(
    'default'   => _x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam', 'n_two'),
    'type'      => 'theme_mod'
  ));

  $wp_customize->add_control('showcase_1_text', array(
    'label'   => __('Text', 'n_two'),
    'section' => 'showcase_1',
    'priority'  => 4
  ));

  // 3 images in col 1 end

  // Start panel 1 with button & text only

  $wp_customize->add_section('showcase_panel_01', array(
    'title'   => __('Panel_01', 'n_two'),
    'description' => sprintf(__('Options for showcase', 'n_two')),
    'priority'    => 155
  ));

  $wp_customize->add_setting('btn_url_panel01', array(
    'default'   => _x('http://test.com', 'n_two'),
    'type'      => 'theme_mod'
  ));

  $wp_customize->add_control('btn_url_panel01', array(
    'label'   => __('Button URL', 'n_two'),
    'section' => 'showcase_panel_01',
    'priority'  => 5
  ));

  $wp_customize->add_setting('btn_text_panel01', array(
    'default'   => _x('Read More', 'n_two'),
    'type'      => 'theme_mod'
  ));

  $wp_customize->add_control('btn_text_panel01', array(
    'label'   => __('Button Text', 'n_two'),
    'section' => 'showcase_panel_01',
    'priority'  => 6
  ));


  // Panel 1 with text & button ends here

}
add_action('customize_register', 'n_two_customize_register');
