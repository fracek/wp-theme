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
        <time datetime="<?php the_time('c'); ?>" pubdate>
            <?php the_time('M d, Y'); ?>
        </time>
        <?php if (!is_single()) : ?>
            <?php if (comments_open()) : ?>
                <span> - </span>
                <span class="post-comments-link">
                    <?php comments_popup_link(__('0 Comments'),
                                              __('1 Comment'),
                                              __('%s Comments'),
                                              null, ''); ?>
                </span>
            <?php endif; ?>
        <?php endif; ?>
        <?php edit_post_link(__('[edit]', 'ceks'), ''); ?>
    </footer>
</article>
