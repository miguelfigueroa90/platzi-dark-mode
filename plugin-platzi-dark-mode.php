<?php

/**
 * Plugin name: Platzi Dark mode
 * Description: Activate dark mode in your theme.
 * Version: 1.0
 * Author: Miguel Figueroa
 * Author URI: https://github.com/miguelfigueroa90
 */

function style_plugin()
{
    wp_enqueue_style(
        $handle = 'dark_mode',
        $src = plugin_dir_url($file = __FILE__) . '/assets/css/style.css',
        $deps = '',
        $ver = '1.0',
        $media = 'all'
    );
}

// Hooks
add_action('wp_enqueue_scripts', 'style_plugin');
