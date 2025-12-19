<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Indian_Wedding_Invitation
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    
    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    
    <!-- Custom Styles -->
    <style>
        :root {
            --primary-color: #8B0000; /* Deep Maroon */
            --secondary-color: #D4AF37; /* Gold */
            --accent-color: #008080; /* Peacock Blue */
            --light-color: #FEFDFC; /* Ivory */
            --dark-color: #333333;
            --light-gray: #f9f9f9;
            --dark-bg: #222;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--light-color);
            color: var(--dark-color);
            line-height: 1.6;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
            color: var(--primary-color);
            line-height: 1.3;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header Styles */
        .wedding-hero {
            background: linear-gradient(rgba(139, 0, 0, 0.8), rgba(139, 0, 0, 0.9)), 
                        url('<?php echo get_template_directory_uri(); ?>/images/wedding-bg.jpg') center/cover;
            color: white;
            text-align: center;
            padding: 150px 20px;
            position: relative;
        }
        
        .couple-names {
            font-size: 4rem;
            margin-bottom: 20px;
            letter-spacing: 3px;
            font-weight: 700;
        }
        
        .wedding-date {
            font-size: 2rem;
            margin-bottom: 30px;
            font-weight: 300;
        }
        
        .invitation-text {
            font-size: 1.3rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }
        
        .scroll-down {
            margin-top: 40px;
        }
        
        .scroll-down a {
            color: white;
            text-decoration: none;
            font-size: 1.1rem;
            display: inline-block;
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
            40% {transform: translateY(-20px);}
            60% {transform: translateY(-10px);}
        }
        
        /* Section Styles */
        .wedding-section {
            padding: 100px 0;
        }
        
        .bg-light {
            background-color: var(--light-gray);
        }
        
        .bg-dark {
            background-color: var(--dark-bg);
        }
        
        .bg-dark .section-title,
        .bg-dark .section-title.light {
            color: white;
        }
        
        .bg-dark .section-title:after {
            background: var(--secondary-color);
        }
        
        .bg-dark p {
            color: #ddd;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
            font-size: 2.5rem;
        }
        
        .section-title:after {
            content: "";
            display: block;
            width: 100px;
            height: 3px;
            background: var(--secondary-color);
            margin: 15px auto;
        }
        
        .section-intro {
            text-align: center;
            max-width: 700px;
            margin: -30px auto 50px;
            font-size: 1.1rem;
            color: #666;
        }
        
        /* Events Section */
        .events-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .event-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            padding: 30px;
            transition: transform 0.3s ease;
            border-top: 5px solid var(--secondary-color);
            position: relative;
        }
        
        .event-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }
        
        .event-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .event-name {
            color: var(--primary-color);
            margin-bottom: 0;
            font-size: 1.8rem;
        }
        
        .event-icon {
            font-size: 2rem;
        }
        
        .event-details {
            margin: 25px 0;
        }
        
        .event-details p {
            margin-bottom: 10px;
        }
        
        .rsvp-btn {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            cursor: pointer;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            transition: all 0.3s ease;
            display: block;
            width: 100%;
            font-size: 1.1rem;
        }
        
        .rsvp-btn:hover {
            background: var(--accent-color);
            transform: scale(1.02);
        }
        
        /* Venue Tabs */
        .venue-tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }
        
        .tab-btn {
            background: none;
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            padding: 12px 25px;
            margin: 5px;
            cursor: pointer;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .tab-btn.active,
        .tab-btn:hover {
            background: var(--primary-color);
            color: white;
        }
        
        .tab-content {
            display: none;
        }
        
        .tab-content.active {
            display: block;
        }
        
        .venue-details {
            text-align: center;
        }
        
        .map-placeholder {
            height: 300px;
            background: #eee;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px 0;
            color: #777;
        }
        
        .venue-info {
            text-align: left;
            max-width: 500px;
            margin: 20px auto 0;
        }
        
        .venue-info p {
            margin-bottom: 10px;
        }
        
        /* Rituals Timeline */
        .rituals-timeline {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }
        
        .rituals-timeline:before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            width: 4px;
            background: var(--secondary-color);
            left: 50%;
            margin-left: -2px;
        }
        
        .ritual-item {
            margin-bottom: 50px;
            position: relative;
            width: 100%;
        }
        
        .ritual-item:nth-child(odd) {
            padding-right: calc(50% + 30px);
            text-align: right;
        }
        
        .ritual-item:nth-child(even) {
            padding-left: calc(50% + 30px);
        }
        
        .ritual-time {
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 10px;
        }
        
        .ritual-content {
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        }
        
        .ritual-content h3 {
            margin-top: 0;
        }
        
        /* Dietary Section */
        .dietary-content {
            display: flex;
            align-items: center;
            max-width: 800px;
            margin: 0 auto;
            gap: 30px;
        }
        
        .dietary-icon {
            font-size: 4rem;
        }
        
        .dietary-text {
            flex: 1;
        }
        
        .dietary-note {
            margin-top: 20px;
            padding: 15px;
            background: rgba(212, 175, 55, 0.1);
            border-left: 4px solid var(--secondary-color);
            border-radius: 5px;
        }
        
        /* Livestream Section */
        .livestream-content {
            display: flex;
            align-items: center;
            max-width: 800px;
            margin: 0 auto;
            gap: 30px;
        }
        
        .livestream-icon {
            font-size: 4rem;
        }
        
        .livestream-text {
            flex: 1;
        }
        
        .stream-link {
            color: var(--accent-color);
            font-weight: 600;
            text-decoration: none;
        }
        
        .stream-link:hover {
            text-decoration: underline;
        }
        
        .timezone {
            font-style: italic;
            color: #666;
        }
        
        .stream-details {
            margin-top: 20px;
            padding: 15px;
            background: rgba(0, 128, 128, 0.1);
            border-left: 4px solid var(--accent-color);
            border-radius: 5px;
        }
        
        /* Gallery Section */
        .gallery-content {
            text-align: center;
        }
        
        .hashtag {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
            margin: 30px 0;
        }
        
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 30px 0;
            flex-wrap: wrap;
        }
        
        .social-icon {
            background: var(--primary-color);
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            background: var(--accent-color);
            transform: translateY(-3px);
        }
        
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 15px;
            margin-top: 40px;
        }
        
        .gallery-item {
            height: 150px;
            background: #ddd;
            border-radius: 5px;
            transition: transform 0.3s ease;
        }
        
        .gallery-item:hover {
            transform: scale(1.05);
        }
        
        /* Contact Section */
        .contact-content {
            text-align: center;
            color: white;
        }
        
        .couple-signature {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            margin: 20px 0;
        }
        
        .contact-info {
            margin-top: 30px;
        }
        
        .contact-info a {
            color: var(--secondary-color);
            text-decoration: none;
        }
        
        /* Modal Styles */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.7);
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .modal-container {
            background: white;
            border-radius: 10px;
            max-width: 500px;
            width: 90%;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }
        
        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border-bottom: 1px solid #eee;
        }
        
        .modal-header h3 {
            margin: 0;
            color: var(--primary-color);
        }
        
        .modal-close {
            background: none;
            border: none;
            font-size: 2rem;
            cursor: pointer;
            color: #999;
        }
        
        .modal-close:hover {
            color: #333;
        }
        
        .modal-body {
            padding: 20px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--dark-color);
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: 'Montserrat', sans-serif;
            font-size: 1rem;
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 2px rgba(139, 0, 0, 0.2);
        }
        
        .checkbox-group div {
            margin-bottom: 8px;
        }
        
        .checkbox-group input {
            width: auto;
            margin-right: 8px;
        }
        
        .allergies-textarea {
            margin-top: 10px;
            display: none;
        }
        
        .form-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }
        
        .btn-primary,
        .btn-secondary {
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-primary {
            background: var(--primary-color);
            color: white;
        }
        
        .btn-primary:hover {
            background: var(--accent-color);
            transform: translateY(-2px);
        }
        
        .btn-secondary {
            background: #ccc;
            color: #333;
        }
        
        .btn-secondary:hover {
            background: #bbb;
        }
        
        .success-message {
            text-align: center;
            padding: 30px;
        }
        
        .success-message h3 {
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .couple-names {
                font-size: 3rem;
            }
            
            .wedding-date {
                font-size: 1.5rem;
            }
            
            .dietary-content,
            .livestream-content {
                flex-direction: column;
                text-align: center;
            }
            
            .ritual-item:nth-child(odd),
            .ritual-item:nth-child(even) {
                padding: 0;
                text-align: center;
            }
            
            .rituals-timeline:before {
                left: 30px;
            }
            
            .ritual-item {
                padding-left: 60px !important;
                text-align: left !important;
            }
        }
        
        @media (max-width: 768px) {
            .wedding-hero {
                padding: 100px 20px;
            }
            
            .couple-names {
                font-size: 2.5rem;
            }
            
            .wedding-date {
                font-size: 1.3rem;
            }
            
            .wedding-section {
                padding: 60px 0;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .events-container {
                grid-template-columns: 1fr;
            }
            
            .social-icons {
                flex-direction: column;
                align-items: center;
            }
            
            .form-actions {
                flex-direction: column;
                gap: 10px;
            }
            
            .form-actions button {
                width: 100%;
            }
        }
    </style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'indian-wedding' ); ?></a>