<?php if (have_posts()) while (have_posts()) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <h1>
            <a href="<?php the_permalink(); ?>" 
               title="<?php printf(esc_attr__('Permalink to %s', 'ceks'),
                        the_title_attribute('echo=0')); ?>"
               rel="bookmark"><?php the_title(); ?>
            </a>
        </h1>
    </header>
    <div class="body">
        <?php the_content(); ?>
        <?php if (is_single()) { wp_link_pages(); } ?>
    </div>
    <footer>
        <?php edit_post_link(__('[edit]', 'ceks'), ''); ?>
    </footer>
</article>
<? endwhile; ?>
