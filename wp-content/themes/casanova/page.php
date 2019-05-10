<?php get_header(); ?>
    <div id="primary">
        <div id="content" role="main">
            <?php
            while ( have_posts() ) : the_post();
                get_template_part( 'content', 'page' );
                comments_template( '', true );
            endwhile;
            ?>
        </div>
    </div>
<?php get_footer(); ?>