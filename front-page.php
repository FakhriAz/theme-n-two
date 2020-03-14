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