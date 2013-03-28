<?php
// Customize the page title
if (!function_exists('ceks_page_title')) {
    function ceks_page_title($title) {
        $new_title = $title;
        if (!$new_title) {
            $new_title = get_bloginfo('name');
        }
        return $new_title;
    }
    add_filter('wp_title', 'ceks_page_title');
}

// Customize the nav menu
if (!function_exists('ceks_nav_menu_args')) {
    function ceks_nav_menu_args($args = '') {
        $args['container'] = false;
        return $args;
    }
    add_filter('wp_nav_menu_args', 'ceks_nav_menu_args');
}
?>
