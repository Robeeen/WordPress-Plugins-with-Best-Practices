<?php

register_activation_hook( __FILE__, 'new_form');

function new_form() {
    ob_start();
    ?>
    <div class="grid-container">
        <div></div>
        <div class="form">
        <form id="fpc-new-post" method="post">
        <?php wp_nonce_field('fpc_new_post_action', 'fpc_new_post_nonce'); ?>
            <div class="form-group">           
                    <label for="fpc-title">Title:</label>
                    <input type="text" id="fpc-title" name="fpc_title" class="form-control" required>
            </div>
        <div class="form-group">
                <label for="fpc-content">Content:</label>
                <textarea id="fpc-content" name="fpc_content" class="form-control" required></textarea>
        </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
        </div>
        <div></div>
    </div>
    <?php
   return ob_get_clean();
   
}

add_shortcode('input_form', 'new_form');



