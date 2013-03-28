<?php 
/*
 * Template Name: Archives
 */
get_header(); ?>
<article id="archive">
    <header>
        <h1>Archives</h1>
    </header>
    <div class="body">
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
</article>
<?php get_footer(); ?>
