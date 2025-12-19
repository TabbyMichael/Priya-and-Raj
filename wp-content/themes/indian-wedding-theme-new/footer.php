<?php
/**
 * The template for displaying the footer
 *
 * @package Indian_Wedding
 */
?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="site-footer__container">
            <div class="site-footer__widgets">
                <?php if (is_active_sidebar('footer-1')) : ?>
                    <div class="footer-widget">
                        <?php dynamic_sidebar('footer-1'); ?>
                    </div>
                <?php endif; ?>

                <?php if (is_active_sidebar('footer-2')) : ?>
                    <div class="footer-widget">
                        <?php dynamic_sidebar('footer-2'); ?>
                    </div>
                <?php endif; ?>

                <?php if (is_active_sidebar('footer-3')) : ?>
                    <div class="footer-widget">
                        <?php dynamic_sidebar('footer-3'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="site-footer__bottom">
                <div class="site-info">
                    <?php
                    printf(
                    /* translators: 1: Theme name, 2: Theme author. */
                        esc_html__('Theme: %1$s by %2$s', 'indian-wedding'),
                        '<a href="' . esc_url(__('https://example.com/indian-wedding-theme/', 'indian-wedding')) . '">Indian Wedding</a>',
                        'Your Name'
                    );
                    ?>
                    <span class="sep"> | </span>
                    <?php
                    /* translators: %s: WordPress. */
                    printf(esc_html__('Proudly powered by %s', 'indian-wedding'), 'WordPress');
                    ?>
                </div><!-- .site-info -->

                <nav class="footer-navigation">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer',
                            'menu_id'        => 'footer-menu',
                            'depth'          => 1,
                        )
                    );
                    ?>
                </nav>
            </div>
        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
