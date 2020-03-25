<article class="posts">
                <?php if(have_posts()) : ?>
                    <?php 
                        if ( is_category() ) {
                            single_cat_title( 'Category Archive: ' );
                        } elseif ( is_tag() ) {
                            single_tag_title( 'Tag Archive: ' );
                        }
                         elseif (is_author() ) {
                             the_post(); 
                             echo "Archive's Author: " . get_the_author();
                             rewind_posts(); 
                         }
                    ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>></div>
                        <h2><?php the_title(); ?></h2>
                        <p class="meta">
                            Posted at
                            <?php the_time('F j, Y g: i a'); ?>
                            By
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> 
                            <?php the_author(); ?>
                            <?php the_category( ' ' ); ?>
                            </a>    
                        </p>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>
                        <?php if(is_single()) : ?>
                            <?php the_content(); ?>
                        <?php else : ?>
                        <?php the_excerpt(); ?>
                <a class="botton__posts" href="<?php the_permalink(); ?>">Read More</a>
                        <?php endif; ?>    
            </article>
                <?php endwhile; ?>
            <?php else : ?>
                    <?php echo apautop('We did no find what you are looking for.')?>
            <?php endif; ?>
        </div>