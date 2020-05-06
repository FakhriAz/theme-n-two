<?php
  function n_two_customize_register($wp_customize){
    // Showcase Section
    $wp_customize->add_section('showcase', array(
      'title'   => __('Showcase', 'n_two'),
      'description' => sprintf(__('Options for showcase','n_two')),
      'priority'    => 130
    ));

    $wp_customize->add_setting('showcase_image', array(
      'default'   => get_bloginfo('template_directory').'/img/showcase.jpg',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
      'label'   => __('Showcase Image', 'n_two'),
      'section' => 'showcase',
      'settings' => 'showcase_image',
      'priority'  => 1
    )));

    
    $wp_customize->add_setting('showcase_heading', array(
      'default'   => _x('Custom Wordpress Theme', 'n_two'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading', array(
      'label'   => __('Heading', 'n_two'),
      'section' => 'showcase',
      'priority'  => 3
    ));

    $wp_customize->add_setting('showcase_text', array(
      'default'   => _x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam', 'n_two'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_text', array(
      'label'   => __('Text', 'n_two'),
      'section' => 'showcase',
      'priority'  => 4
    ));

    $wp_customize->add_setting('btn_url', array(
      'default'   => _x('http://testtt.com', 'n_two'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('btn_url', array(
      'label'   => __('Button URL', 'n_two'),
      'section' => 'showcase',
      'priority'  => 5
    ));

    $wp_customize->add_setting('btn_text', array(
      'default'   => _x('Read More', 'n_two'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('btn_text', array(
      'label'   => __('Button Text', 'n_two'),
      'section' => 'showcase',
      'priority'  => 6
    ));
  


    // 3 images in col 1 start 
    $wp_customize->add_section('showcase_1', array(
      'title'   => __('Showcase_1', 'n_two'),
      'description' => sprintf(__('Options for showcase','n_two')),
      'priority'    => 135
    ));

    $wp_customize->add_setting('small_image1', array(
      'default'   => get_bloginfo('template_directory').'/img/breakfast1.jpg',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'small_image1', array(
      'label'   => __('Rounded image 1', 'n_two'),
      'section' => 'showcase_1',
      'settings' => 'small_image1',
      'priority'  => 2
    )));

    // 3 images in col 1 end
  }
  add_action('customize_register', 'n_two_customize_register');