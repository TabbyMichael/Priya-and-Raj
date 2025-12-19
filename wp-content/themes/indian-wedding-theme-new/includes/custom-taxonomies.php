<?php

function indian_wedding_register_taxonomies() {
    register_taxonomy(
        'gallery_category',
        array('gallery_item'),
        array(
            'labels' => array(
                'name' => __('Gallery Categories', 'indian-wedding'),
                'singular_name' => __('Gallery Category', 'indian-wedding'),
            ),
            'public' => true,
            'hierarchical' => true,
            'show_in_rest' => true,
            'rewrite' => array('slug' => 'gallery-category'),
        )
    );
}
add_action('init', 'indian_wedding_register_taxonomies');
