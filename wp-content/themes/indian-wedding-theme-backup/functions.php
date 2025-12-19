<?php
/**
 * Indian Wedding Theme Functions
 */

// Theme setup
function indian_wedding_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'indian-wedding'),
    ));
}
add_action('after_setup_theme', 'indian_wedding_theme_setup');

// Enqueue scripts and styles
function indian_wedding_scripts() {
    // Enqueue theme stylesheet
    wp_enqueue_style('indian-wedding-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue Google Fonts
    wp_enqueue_style('indian-wedding-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;600&display=swap', array(), null);
    
    // Enqueue jQuery
    wp_enqueue_script('jquery');
    
    // Enqueue custom JavaScript
    wp_enqueue_script('indian-wedding-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'indian_wedding_scripts');

// Create custom post type for RSVPs
function create_rsvp_post_type() {
    register_post_type('wedding_rsvp',
        array(
            'labels' => array(
                'name' => __('RSVPs'),
                'singular_name' => __('RSVP')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'custom-fields'),
        )
    );
}
add_action('init', 'create_rsvp_post_type');

// Add AJAX handlers for RSVP functionality
add_action('wp_ajax_submit_rsvp', 'handle_rsvp_submission');
add_action('wp_ajax_nopriv_submit_rsvp', 'handle_rsvp_submission');

function handle_rsvp_submission() {
    // Check nonce for security
    if (!wp_verify_nonce($_POST['nonce'], 'rsvp_nonce')) {
        wp_die('Security check failed');
    }
    
    // Process RSVP data
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $events = $_POST['events'];
    $guests = intval($_POST['guests']);
    $dietary = sanitize_text_field($_POST['dietary']);
    
    // Create post for RSVP
    $post_data = array(
        'post_title'    => 'RSVP from ' . $name,
        'post_content'  => 'Email: ' . $email . "\n" . 'Guests: ' . $guests . "\n" . 'Dietary: ' . $dietary,
        'post_status'   => 'publish',
        'post_type'     => 'wedding_rsvp'
    );
    
    $post_id = wp_insert_post($post_data);
    
    // Add custom fields
    if ($post_id) {
        update_post_meta($post_id, 'rsvp_name', $name);
        update_post_meta($post_id, 'rsvp_email', $email);
        update_post_meta($post_id, 'rsvp_events', $events);
        update_post_meta($post_id, 'rsvp_guests', $guests);
        update_post_meta($post_id, 'rsvp_dietary', $dietary);
        
        wp_send_json_success('Thank you for your RSVP!');
    } else {
        wp_send_json_error('Sorry, there was an error processing your RSVP.');
    }
}

// Add template parts support
function indian_wedding_template_parts() {
    // This function ensures our template parts are recognized
    // It's just here for clarity - WordPress automatically recognizes template parts
}
add_action('init', 'indian_wedding_template_parts');
?>