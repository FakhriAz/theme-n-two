    <?php get_header(); ?>
        </div>
    </header>

    <div class="container-content">
        <div class="main-block">
        <?php if ( have_posts() ) :
             while ( have_posts() ) : the_post(); ?>
            <?php get_template_part('content', get_post_format()); ?> 
            <?php endwhile;
            echo paginate_links();
             else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?> 
        </div>
    </div> <!-- Test closing div for container-content -->
<?php get_footer(); ?>  