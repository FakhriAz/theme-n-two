<?php get_header(); ?>
        </div>
    </header>

    <div class="container-content">
        <div class="main block">
        <?php get_template_part('content-archive', get_post_format()); ?>
    </div>
<?php get_footer(); ?>