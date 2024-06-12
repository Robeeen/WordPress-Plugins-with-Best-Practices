<?php

function fpc_post_form() {
    ob_start();
    ?>

    <form id="fpc-new-post" method="post">
        <label for="fpc-title">Title:</label>
        <input type="text" id="fpc-title" name="fpc_title" required>
        
        <label for="fpc-content">Content:</label>
        <textarea id="fpc-content" name="fpc_content" required></textarea>
        
        <input type="submit" value="Submit">
    </form>

    <?php
    return ob_get_clean();
}
add_shortcode('fpc_post_form', 'fpc_post_form');
