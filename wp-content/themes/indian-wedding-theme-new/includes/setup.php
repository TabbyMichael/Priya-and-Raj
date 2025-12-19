<?php

function indian_wedding_load_textdomain() {
    load_theme_textdomain('indian-wedding', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'indian_wedding_load_textdomain');
