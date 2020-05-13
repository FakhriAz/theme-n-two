<!doctype html>

<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Trade Winds">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="N-Two">
  <meta name="author" content="Fakhri">

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
  <?php wp_head(); ?>  
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="container__header">
            <div class="header-1">
                <h1>
                    <a href="<?php echo home_url('/'); ?>">
                        <?php bloginfo('name'); ?>
                    </a>  
                    <small><?php bloginfo('description'); ?></small>
                </h1>
                    <div class="header-right">
                        <form method="get" action="<?php esc_url(home_url('/')); ?>">
                            <input type="text" name="form__input" placeholder="Search">
                        </form>
            </div>        
                </div>
                <nav class="nav main-nav">
                     <div class="container">
                         <?php 
                            $args = array (
                                'theme_location' => 'primary',
                            );
                         ?>

                            <?php wp_nav_menu($args); ?>
                    </div>
                </nav>
        </div>
    </header>
        <!-- Front page 2 columns -->
        <div class="container__one">    
            <div class="container__one column__one">
                <h1><?php echo get_theme_mod('showcase_1_heading', 'Default heading') ?></h1>
                <p><?php echo get_theme_mod('showcase_1_text', 'Default paragraph') ?></p>
                <div class="three_images">
                    <div class="img__1">
                        <img src="<?php echo get_theme_mod('small_image1', get_bloginfo('template_url').'/img/lunch-1.jpg'); ?>" alt="lunch image">
                        <p><?php echo get_theme_mod('showcase_1img1_text', 'Default paragraph') ?></p>
                    </div>
                    <div class="img__2">
                    <img src="<?php echo get_theme_mod('small_image2', get_bloginfo('template_url').'/img/lunch-2.jpg'); ?>" alt="lunch image">
                        <p><?php echo get_theme_mod('showcase_2img2_text', 'Default paragraph') ?></p>
                    </div>
                    <div class="img__3">
                    <img src="<?php echo get_theme_mod('small_image3', get_bloginfo('template_url').'/img/lunch-3.jpg'); ?>" alt="lunch image">
                        <p><?php echo get_theme_mod('showcase_3img3_text', 'Default paragraph') ?></p>
                    </div>
                </div>
                <a href="<?php echo get_theme_mod('btn_url','www.test.com') ?>"><?php echo get_theme_mod('btn_text') ?></a>
            </div>

            <div class="container__one column__two">
                <style>
                    .column__two{
                        background: url(<?php echo get_theme_mod('showcase_2_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>) no-repeat center center;
                        background-size: cover;
                    }
                </style>
                <h3>Column2</h3>
        </div>
    </div>
    </div>
    <footer class="footer">
        <div class="container__footer">
            <ul>
                <li><p>&copy; 2020 Fakhri Azzouz</p></li>
                <li><a href="Home">Home</a></li>
                <li><a href="About">About</a></li>
                <li><a href="Services">Services</a></li>
            </ul>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>