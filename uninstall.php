<?php

// if uninstall.php is not called by WordPress, die

register_deactivation_hook( __FILE__, 'deactivate_plugin' );

function deactivate_plugin($category_id) {

    $args = array(
        'category' => $category_id,
        'numberposts' => -1, // Fetch all posts
        'post_status' => 'any' // Include drafts, published, etc.
    );

    $total_posts = get_posts($args);
    foreach($total_posts as $post){
        wp_delete_post($post->ID, true);
    }

}
deactivate_plugin(31);