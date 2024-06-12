<?php
function fpc_enqueue_scripts() {
    wp_enqueue_style('fpc-style', plugins_url('../../public/css/style.css', __FILE__));
    wp_enqueue_script('fpc-script', plugins_url('../../public/js/main.js', __FILE__));
}
add_action('wp_enqueue_scripts', 'fpc_enqueue_scripts');
