<?php get_header(); ?> 
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', get_post_format() ); ?>
    <?php get_template_part( 'nav', 'post-single' ); ?>
    <?php comments_template( '', true ); ?>
<?php endwhile; ?>
<?php get_footer(); ?>
