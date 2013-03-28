<?php
add_action('after_setup_theme', 'ceks_setup_theme');
if (!function_exists('ceks_setup_theme')) {
    function ceks_setup_theme() {
        add_theme_support('automatic-feed-links');
        add_theme_support('post-formats', array(
            'link',
            'image',
            'quote',
            'status',
            'video',
            'chat'
        ));
        register_nav_menus(array(
            'primary' => __('Primary menu', 'ceks')
        ));
    }
}
?>
