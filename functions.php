<?php
$libraries = array(
    'filters',
    'theme-options',
    'theme-setup',
    'sidebar'
);
foreach($libraries as $l) {
    include_once('libraries/' . $l . '.php');
}

if (!function_exists('ceks_content_nav')) {
    function ceks_content_nav($nav_id) {
        global $wp_query;
        if ($wp_query->max_num_pages > 1) : ?>
            <nav id="<?php echo $nav_id; ?>">
                <div class="previous">
                    <?php next_posts_link(__('Previous Entries', 'ceks')); ?>
                </div>
                <div class="next">
                    <?php previous_posts_link(__('Next Entries', 'ceks')); ?>
                </div>
            </nav>
        <?php endif; 
    }
}

if (!function_exists('ceks_get_logo_url')) {
    function ceks_get_logo_url() {
        return get_template_directory_uri() . '/images/logo.png';
    }
}
?>
