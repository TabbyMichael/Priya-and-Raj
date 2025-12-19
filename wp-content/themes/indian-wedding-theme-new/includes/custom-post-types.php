<?php

function indian_wedding_register_post_types() {
    register_post_type(
        'testimonial',
        array(
            'labels' => array(
                'name' => __('Testimonials', 'indian-wedding'),
                'singular_name' => __('Testimonial', 'indian-wedding'),
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-testimonial',
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
            'show_in_rest' => true,
            'rewrite' => array('slug' => 'testimonials'),
        )
    );

    register_post_type(
        'gallery_item',
        array(
            'labels' => array(
                'name' => __('Gallery', 'indian-wedding'),
                'singular_name' => __('Gallery Item', 'indian-wedding'),
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-format-gallery',
            'supports' => array('title', 'thumbnail'),
            'show_in_rest' => true,
            'rewrite' => array('slug' => 'gallery'),
        )
    );
}
add_action('init', 'indian_wedding_register_post_types');
