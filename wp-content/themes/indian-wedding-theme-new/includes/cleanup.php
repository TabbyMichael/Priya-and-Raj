<?php

function indian_wedding_cleanup_head() {
    remove_action('wp_head', 'wp_generator');
}
add_action('after_setup_theme', 'indian_wedding_cleanup_head');
