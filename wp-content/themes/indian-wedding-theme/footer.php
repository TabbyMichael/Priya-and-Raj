<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Indian_Wedding_Invitation
 */

?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="footer-container">
            <div class="footer-content">
                <!-- Company Branding Section -->
                <div class="footer-section footer-branding">
                    <div class="footer-logo">
                        <h2>Priya & Raj</h2>
                    </div>
                    <p class="footer-tagline">Celebrating love, tradition, and togetherness</p>
                    <p class="footer-description">Creating unforgettable moments for our special day</p>
                </div>

                <!-- Quick Navigation Links -->
                <div class="footer-section footer-navigation">
                    <h3 class="footer-heading">Navigation</h3>
                    <nav aria-label="Footer Navigation">
                        <ul class="footer-links">
                            <li><a href="#events" aria-label="Go to Events section">Events</a></li>
                            <li><a href="#venue" aria-label="Go to Venue section">Venue</a></li>
                            <li><a href="#rituals" aria-label="Go to Rituals section">Rituals</a></li>
                            <li><a href="#dietary" aria-label="Go to Dietary Information section">Dietary Info</a></li>
                            <li><a href="#livestream" aria-label="Go to Livestream section">Livestream</a></li>
                            <li><a href="#gallery" aria-label="Go to Gallery section">Gallery</a></li>
                            <li><a href="#contact" aria-label="Go to Contact section">Contact</a></li>
                        </ul>
                    </nav>
                </div>

                <!-- Services/Product Links -->
                <div class="footer-section footer-services">
                    <h3 class="footer-heading">Wedding Information</h3>
                    <ul class="footer-links">
                        <li><a href="#" aria-label="View Bridal Shower details">Bridal Shower</a></li>
                        <li><a href="#" aria-label="View Haldi Ceremony details">Haldi Ceremony</a></li>
                        <li><a href="#" aria-label="View Mehndi Ceremony details">Mehndi Ceremony</a></li>
                        <li><a href="#" aria-label="View Sangeet Night details">Sangeet Night</a></li>
                        <li><a href="#" aria-label="View Wedding Ceremony details">Wedding Ceremony</a></li>
                        <li><a href="#" aria-label="View Reception details">Reception</a></li>
                        <li><a href="#" aria-label="View RSVP information">RSVP</a></li>
                    </ul>
                </div>

                <!-- Contact Information -->
                <div class="footer-section footer-contact">
                    <h3 class="footer-heading">Contact Us</h3>
                    <address class="footer-address">
                        <p><i class="fas fa-envelope"></i> <a href="mailto:info@priyawedsraj.com">info@priyawedsraj.com</a></p>
                        <p><i class="fas fa-phone"></i> <a href="tel:+919876543210">+91 98765 43210</a></p>
                        <p><i class="fas fa-map-marker-alt"></i> New Delhi, India</p>
                    </address>
                </div>

                <!-- Social Media Links -->
                <div class="footer-section footer-social">
                    <h3 class="footer-heading">Connect With Us</h3>
                    <div class="social-links" role="list">
                        <a href="#" class="social-link" aria-label="Visit our Instagram page">
                            <i class="fab fa-instagram"></i>
                            <span class="sr-only">Instagram</span>
                        </a>
                        <a href="#" class="social-link" aria-label="Visit our Facebook page">
                            <i class="fab fa-facebook-f"></i>
                            <span class="sr-only">Facebook</span>
                        </a>
                        <a href="#" class="social-link" aria-label="Visit our Twitter page">
                            <i class="fab fa-twitter"></i>
                            <span class="sr-only">Twitter</span>
                        </a>
                        <a href="#" class="social-link" aria-label="Visit our YouTube channel">
                            <i class="fab fa-youtube"></i>
                            <span class="sr-only">YouTube</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Legal Section -->
            <div class="footer-legal">
                <div class="legal-container">
                    <p class="copyright">&copy; <?php echo date('Y'); ?> Priya & Raj Wedding. All rights reserved.</p>
                    <div class="legal-links">
                        <a href="#" aria-label="View Privacy Policy">Privacy Policy</a>
                        <a href="#" aria-label="View Terms of Service">Terms of Service</a>
                        <a href="#" aria-label="View Cookie Policy">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
// Footer-specific JavaScript functionality
(function() {
    // Smooth scrolling for footer links
    document.querySelectorAll('.footer-links a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Add keyboard navigation support for social links
    const socialLinks = document.querySelectorAll('.social-link');
    socialLinks.forEach((link, index) => {
        link.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                window.open(this.href, '_blank');
            }
        });
    });
})();
</script>

</body>
</html>