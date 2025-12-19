<?php
/**
 * Indian Wedding Invitation Theme
 *
 * @package Indian_Wedding_Invitation
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php get_template_part('template-parts/hero'); ?>
        
        <?php get_template_part('template-parts/events'); ?>
        
        <?php get_template_part('template-parts/venue'); ?>
        
        <?php get_template_part('template-parts/rituals'); ?>
        
        <?php get_template_part('template-parts/dietary'); ?>
        
        <?php get_template_part('template-parts/livestream'); ?>
        
        <?php get_template_part('template-parts/gallery'); ?>
        
        <?php get_template_part('template-parts/contact'); ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>