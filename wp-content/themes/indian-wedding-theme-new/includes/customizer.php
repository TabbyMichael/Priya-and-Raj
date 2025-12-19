<?php

function indian_wedding_customize_register($wp_customize) {
    $wp_customize->add_section(
        'indian_wedding_footer',
        array(
            'title' => __('Footer', 'indian-wedding'),
        )
    );

    $wp_customize->add_setting(
        'indian_wedding_footer_text',
        array(
            'default' => '',
            'sanitize_callback' => 'wp_kses_post',
        )
    );

    $wp_customize->add_control(
        'indian_wedding_footer_text',
        array(
            'type' => 'textarea',
            'section' => 'indian_wedding_footer',
            'label' => __('Footer text', 'indian-wedding'),
        )
    );
}
add_action('customize_register', 'indian_wedding_customize_register');
