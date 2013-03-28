<?php
if (!function_exists('ceks_widgets_init')) {
    function ceks_widgets_init() {
        $default_before_widget = '<div di="%1$s" class="widget %2$s">';
        $default_after_widget = '</div>';

        register_sidebar(array(
            'name' => __('Aside', 'ceks'),
            'id' => 'aside',
            'description' => __('A sidebar', 'ceks'),
            'before_widget' => $default_before_widget,
            'after_widget' => $default_after_widget,
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));

        register_sidebar(array(
            'name' => __('Footer', 'ceks'),
            'id' => 'footer-bottom',
            'description' => __('Footer designed for text widget. Do no enter '
                                . 'a widget title', 'ceks'),
            'before_widget' => $default_before_widget,
            'after_widget' => $default_after_widget,
            'before_title' => '',
            'after_title' => ''
        ));
    }
}
add_action('widgets_init', 'ceks_widgets_init');
?>
