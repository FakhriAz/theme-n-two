<article class="posts">
    <?php if(have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>></div>
            <h2><?php the_title(); ?></h2>
            <p class="meta">
                Posted at
                <?php the_time('F j, Y g: i a'); ?>
                By
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> 
                <?php the_author(); ?>
                <?php the_category( '> ' ); ?>
                <?php the_tags('Tags: ', ', ', '<br />'); ?>   
                </a>    
            </p>
            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php endif; ?>
            <?php the_excerpt(); ?>
    <a class="botton__posts" href="<?php the_permalink(); ?>">Read More</a>
</article>
            <?php endwhile; ?>
                <?php else : ?>
                        <?php echo apautop('We did no find what you are looking for.')?>
                <?php endif; ?>
            </div>