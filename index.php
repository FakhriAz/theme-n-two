    <?php get_header(); ?>
        </div>
    </header>

    <div class="container-content">
        <div class="main block">
        <?php if ( have_posts() ) :
             while ( have_posts() ) : the_post(); ?>
            <?php get_template_part('content', get_post_format()); ?> 
            <?php endwhile;
             else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?> 
    </div>
<?php get_footer(); ?>  