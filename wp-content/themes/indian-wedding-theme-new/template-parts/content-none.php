<?php

?>

<section class="no-results not-found">
    <header class="page-header">
        <h1 class="page-title"><?php esc_html_e('Nothing Found', 'indian-wedding'); ?></h1>
    </header>

    <div class="page-content">
        <?php
        if (is_search()) {
            echo '<p>' . esc_html__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'indian-wedding') . '</p>';
            get_search_form();
        } else {
            echo '<p>' . esc_html__('It seems we can’t find what you’re looking for.', 'indian-wedding') . '</p>';
        }
        ?>
    </div>
</section>
