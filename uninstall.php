<?php

// if uninstall.php is not called by WordPress, die
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    die;
}

function deactivate_plugin() {
    $category = get_the_category_by_ID(31);

   

        // Query for all posts in the "Jun" category.
        $args = array(
            'category_name' => $category,
            'posts_per_page' => -1, // Get all posts.
            'post_status' => array('any'), // Return only post IDs.
        );

    if($total_posts = get_posts($args)){
        foreach($total_posts as $post){
            wp_delete_post($post);
        }
    }
}