<?php

function form_submission() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['fpc_title']) && isset($_POST['fpc_content'])) {
        if (!isset($_POST['fpc_new_post_nonce']) || !wp_verify_nonce($_POST['fpc_new_post_nonce'], 'fpc_new_post_action')) {
            die('Security check failed');
        }

        $new_post = array(
            'post_title'   => sanitize_text_field($_POST['fpc_title']),
            'post_content' => sanitize_textarea_field($_POST['fpc_content']),
            'post_status'  => 'publish',
            'post_author'  => get_current_user_id(),
            'post_type'    => 'post',
            'post_category' => array(31),
        );

        $post_id = wp_insert_post($new_post, $wp_error);

        if ($post_id) {
            // wp_redirect(get_permalink($post_id)); //Display the Post iteself
            wp_redirect(get_category_link( 31 )); //redirect to the category/july page
            exit;
        } else {
            echo 'There was an error creating the post' . $wp_error;
        }
    }
}

add_action('template_redirect', 'form_submission' );

