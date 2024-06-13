<?php

// if uninstall.php is not called by WordPress, die

register_deactivation_hook( __FILE__, 'deactivate_plugin' );

function deactivate_plugin() {
    $category = get_category_by_slug('july');

    if ($category) {
        $category_id = $category->term_id;

        // Query for all posts in the "Jun" category.
        $args = array(
            'category' => $category_id,
            'posts_per_page' => -1, // Get all posts.
            'fields' => 'ids', // Return only post IDs.
        );


    $total_posts = get_posts($args);
    foreach($total_posts as $post){
        wp_delete_post($post, true);
    }
    }
}