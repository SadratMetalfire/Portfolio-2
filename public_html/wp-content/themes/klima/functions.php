<?php
register_nav_menus(array('menu-1' => __('Primary Menu', 'kn_klima')));

function kn_klima_enqueue()
{
    wp_enqueue_style('kn_klima_style', get_stylesheet_uri());
    wp_enqueue_script('kn_klima_scripts', get_template_directory_uri() . '/js/scripts.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'kn_klima_enqueue');
