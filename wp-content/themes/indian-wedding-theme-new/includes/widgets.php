<?php

function indian_wedding_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'indian-wedding'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'indian-wedding'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__('Footer 1', 'indian-wedding'),
            'id'            => 'footer-1',
            'description'   => esc_html__('Add widgets here.', 'indian-wedding'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__('Footer 2', 'indian-wedding'),
            'id'            => 'footer-2',
            'description'   => esc_html__('Add widgets here.', 'indian-wedding'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__('Footer 3', 'indian-wedding'),
            'id'            => 'footer-3',
            'description'   => esc_html__('Add widgets here.', 'indian-wedding'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'indian_wedding_widgets_init');
