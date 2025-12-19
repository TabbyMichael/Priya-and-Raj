<?php

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        if (is_singular()) {
            the_title('<h1 class="entry-title">', '</h1>');
        } else {
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        }

        if ('post' === get_post_type()) {
            echo '<div class="entry-meta">';
            indian_wedding_posted_on();
            indian_wedding_posted_by();
            echo '</div>';
        }
        ?>
    </header>

    <?php indian_wedding_post_thumbnail(); ?>

    <div class="entry-content">
        <?php
        if (is_singular()) {
            the_content();
        } else {
            the_excerpt();
        }
        ?>
    </div>

    <footer class="entry-footer">
        <?php indian_wedding_entry_footer(); ?>
    </footer>
</article>
