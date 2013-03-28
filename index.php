<?php
/*
 * index.php is the main template file
 */
    get_header();
?>

<?php if (have_posts()) : ?>
    <?php /* Archive-like homepage */ ?>
    <div id="home">
        <ul>
        <?php
            query_posts(array('posts_per_page' => -1,
                              'order_by' => 'date',
                              'order' => 'DESC'));
            while (have_posts()) : the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>"
                   title="<?php the_title(); ?>"><?php the_title(); ?>
                </a>
                <span class="date"><?php the_time('M Y'); ?></span>
            </li>
        <?php
            endwhile;
            wp_reset_query();
        ?>
        </ul>
    </div>
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
