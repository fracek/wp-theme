<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <header class="page-header">
    <h1><?php printf(__('Search results for %s', 'ceks'),
        '<span>' . get_search_query() . '</span>') ?>
    </h1>
    </header>
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('content', get_post_format()); ?>
    <?php endwhile; ?>
    <?php get_template_part('nav', 'post-loop'); ?>
<?php else : ?>
    <article id="post-0" class="post no-results not-found">
        <header>
            <h1><?php _e('Nothing Found', 'ceks'); ?></h1>
        </header>
        <p>
        <?php _e('Apologies, but no results were found for the requested '
                . 'archive. Perhaps searching will help find a related post.',
                'twentyeleven' ); ?>
        </p>
        <?php get_search_form(); ?>
    </div>
<?php endif; ?>
<?php get_footer(); ?>
