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
                    <a href="index.php">
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
                        <!-- <ul>
                            <li><a href="Home">Home</a></li>
                            <li><a href="About">About</a></li>
                            <li><a href="#">Services</a></li>
                        </ul> -->
                    </div>
                </nav>
        </div>
    </header>

    <div class="container content">
        <div class="main block">
            <article class="post">
                <h2>Blog post 1</h2>
                <p class="meta">Posted 11:00am 9 April 2020 By admin</p>
                <p>SpaceX is planning a huge boost to the number of rocket launches from its Florida launch sites in the next few years as the company builds its Starlink satellite megaconstellation while meeting flight demands from its customers, according to a federal environmental report. 

The missions for SpaceX's Falcon 9 and Falcon Heavy rockets will also have more options than in the past, according to the report, which was first reported by SpaceNews. One change will be a new mobile service tower allowing some missions to be assembled vertically, rather than horizontally. Another will be the capability to launch to polar orbits — quite the feat, since Florida is located close to the equator and better optimized for missions that operate close to the equator. SpaceX also plans to test recovering payload fairings as the company pushes for greater mission reusability.

By 2023, the company wants to launch 70 missions a year from its two Florida launch sites at the Kennedy Space Center and nearby Cape Canaveral Air Force Station, using Falcon 9 and Falcon Heavy rockets. This rate is a seven-fold increase from the 11 missions SpaceX put into orbit in 2019, and almost double the 38 planned launches in 2020. That information comes from a draft environmental assessment published Thursday (Feb. 27) by the Federal Aviation Administration's Office of Commercial Space Transportation.</p>
            <a class="botton" href="#">Read More</a>
            </article>
            <article class="post">
                <h2>Blog post 2</h2>
                <p class="meta">Posted 11:00am 9 April 2020 By admin</p>
                <p>SpaceX is planning a huge boost to the number of rocket launches from its Florida launch sites in the next few years as the company builds its Starlink satellite megaconstellation while meeting flight demands from its customers, according to a federal environmental report. 

The missions for SpaceX's Falcon 9 and Falcon Heavy rockets will also have more options than in the past, according to the report, which was first reported by SpaceNews. One change will be a new mobile service tower allowing some missions to be assembled vertically, rather than horizontally. Another will be the capability to launch to polar orbits — quite the feat, since Florida is located close to the equator and better optimized for missions that operate close to the equator. SpaceX also plans to test recovering payload fairings as the company pushes for greater mission reusability.

By 2023, the company wants to launch 70 missions a year from its two Florida launch sites at the Kennedy Space Center and nearby Cape Canaveral Air Force Station, using Falcon 9 and Falcon Heavy rockets. This rate is a seven-fold increase from the 11 missions SpaceX put into orbit in 2019, and almost double the 38 planned launches in 2020. That information comes from a draft environmental assessment published Thursday (Feb. 27) by the Federal Aviation Administration's Office of Commercial Space Transportation.</p>
            <a class="botton" href="#">Read More</a>
            </article>
            <article class="post">
                <h2>Blog post 3</h2>
                <p class="meta">Posted 11:00am 9 April 2020 By admin</p>
                <p>SpaceX is planning a huge boost to the number of rocket launches from its Florida launch sites in the next few years as the company builds its Starlink satellite megaconstellation while meeting flight demands from its customers, according to a federal environmental report. 

The missions for SpaceX's Falcon 9 and Falcon Heavy rockets will also have more options than in the past, according to the report, which was first reported by SpaceNews. One change will be a new mobile service tower allowing some missions to be assembled vertically, rather than horizontally. Another will be the capability to launch to polar orbits — quite the feat, since Florida is located close to the equator and better optimized for missions that operate close to the equator. SpaceX also plans to test recovering payload fairings as the company pushes for greater mission reusability.

By 2023, the company wants to launch 70 missions a year from its two Florida launch sites at the Kennedy Space Center and nearby Cape Canaveral Air Force Station, using Falcon 9 and Falcon Heavy rockets. This rate is a seven-fold increase from the 11 missions SpaceX put into orbit in 2019, and almost double the 38 planned launches in 2020. That information comes from a draft environmental assessment published Thursday (Feb. 27) by the Federal Aviation Administration's Office of Commercial Space Transportation.</p>
            <a class="botton" href="#">Read More</a>
            </article>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="footer__left">
                <p>&copy; 2020 Fakhri Azzouz</p>
            </div>  
            <div class="footer__right">
            <ul>
                <li><a href="Home">Home</a></li>
                <li><a href="About">About</a></li>
                <li><a href="#"></a>Services</li>
            </ul>
            </div> 
                <div class="sidebar">
                    <div class="sidebar__block">
                        <p>SpaceX is planning a huge boost to the number of rocket launches from its
                         Florida launch sites in the next few years as the company builds
                         its Starlink satellite megaconstellation while meeting flight demands
                         from its customers, according to a federal environmental report.</p>
                         <a class="botton"></a>
                    </div>
                </div>

        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>