<?php

get_header();
?>

<main id="primary" class="site-main">
<?php
while (have_posts()) {
    the_post();
    get_template_part('template-parts/content', get_post_type());

    the_post_navigation(
        array(
            'prev_text' => '%title',
            'next_text' => '%title',
        )
    );

    if (comments_open() || get_comments_number()) {
        comments_template();
    }
}
?>
</main>

<?php
get_sidebar();
get_footer();
