<?php if(is_search() || is_archive()) : ?>
	<div class="archive-post">
		<h4>
		    <a href="<?php the_permalink(); ?>">
			    <?php the_title(); ?>
		    </a>
		</h4>
<?php endif; ?>
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
    <?php if (is_home()): ?>
        <?php the_excerpt(); ?>
    <a class="botton__posts" href="<?php the_permalink(); ?>">Read More</a>
    <?php else: ?>
        <?php echo wpautop('We did no find what you are looking for.')?>
    <?php endif; ?>
    </div>