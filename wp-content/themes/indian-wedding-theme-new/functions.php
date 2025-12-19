<?php
/**
 * Indian Wedding Theme functions and definitions
 *
 * @package Indian_Wedding
 */

if (!defined('INDIAN_WEDDING_VERSION')) {
    define('INDIAN_WEDDING_VERSION', '1.0.0');
}

function indian_wedding_asset_version($absolute_path) {
    if (is_string($absolute_path) && $absolute_path !== '' && file_exists($absolute_path)) {
        return (string) filemtime($absolute_path);
    }
    return INDIAN_WEDDING_VERSION;
}

/**
 * Theme setup and features
 */
function indian_wedding_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');
    
    // Let WordPress manage the document title
    add_theme_support('title-tag');
    
    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');
    
    // Register navigation menus
    register_nav_menus(
        array(
            'primary' => esc_html__('Primary Menu', 'indian-wedding'),
            'footer'  => esc_html__('Footer Menu', 'indian-wedding'),
        )
    );
    
    // Add theme support for HTML5
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );
    
    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');
    
    // Add support for core custom logo
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
    
    // Add support for full and wide align images
    add_theme_support('align-wide');
    
    // Add support for editor styles
    add_theme_support('editor-styles');
    add_editor_style('dist/css/editor-style.min.css');
}
add_action('after_setup_theme', 'indian_wedding_setup');

/**
 * Enqueue scripts and styles
 */
function indian_wedding_scripts() {
    $dist_css_rel = '/dist/css/main.min.css';
    $dist_css_abs = get_template_directory() . $dist_css_rel;
    if (file_exists($dist_css_abs)) {
        wp_enqueue_style(
            'indian-wedding-style',
            get_template_directory_uri() . $dist_css_rel,
            array(),
            indian_wedding_asset_version($dist_css_abs)
        );
    } else {
        wp_enqueue_style(
            'indian-wedding-style',
            get_stylesheet_uri(),
            array(),
            INDIAN_WEDDING_VERSION
        );
    }

    $dist_js_rel = '/dist/js/main.min.js';
    $dist_js_abs = get_template_directory() . $dist_js_rel;
    $dev_js_rel = '/assets/js/main.js';
    $dev_js_abs = get_template_directory() . $dev_js_rel;
    if (file_exists($dist_js_abs)) {
        wp_enqueue_script(
            'indian-wedding-navigation',
            get_template_directory_uri() . $dist_js_rel,
            array('jquery'),
            indian_wedding_asset_version($dist_js_abs),
            true
        );
    } elseif (file_exists($dev_js_abs)) {
        wp_enqueue_script(
            'indian-wedding-navigation',
            get_template_directory_uri() . $dev_js_rel,
            array('jquery'),
            indian_wedding_asset_version($dev_js_abs),
            true
        );
    }
    
    // Add comment reply script if needed
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
    
    if (wp_script_is('indian-wedding-navigation', 'enqueued')) {
        wp_localize_script('indian-wedding-navigation', 'indianWeddingData', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce'    => wp_create_nonce('indian-wedding-nonce'),
        ));
    }
}
add_action('wp_enqueue_scripts', 'indian_wedding_scripts');

/**
 * Include required files
 */
$includes = array(
    '/includes/setup.php',          // Theme setup
    '/includes/cleanup.php',        // Clean up WordPress defaults
    '/includes/widgets.php',        // Widget areas
    '/includes/custom-post-types.php', // Custom post types
    '/includes/custom-taxonomies.php', // Custom taxonomies
    '/includes/theme-functions.php', // Custom theme functions
    '/includes/template-tags.php',  // Custom template tags
    '/includes/customizer.php',     // Theme Customizer
    '/includes/security.php',       // Security functions
    '/includes/performance.php',    // Performance optimizations
);

foreach ($includes as $file) {
    $filepath = locate_template($file);
    if (!$filepath) {
        trigger_error(sprintf('Error locating %s for inclusion', $file), E_USER_ERROR);
    }
    require_once $filepath;
}

/**
 * Load Jetpack compatibility file if available
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/includes/jetpack.php';
}

/**
 * Load WooCommerce compatibility file if WooCommerce is active
 */
if (class_exists('WooCommerce')) {
    require get_template_directory() . '/includes/woocommerce.php';
}
