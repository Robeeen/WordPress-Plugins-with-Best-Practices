<?php
function fpc_enqueue_scripts() {
    wp_enqueue_style('fpc-style', plugins_url('../../public/css/style.css', __FILE__));
    wp_enqueue_script('fpc-script', plugins_url('../../public/js/main.js', __FILE__));
    wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
}
add_action('wp_enqueue_scripts', 'fpc_enqueue_scripts');
