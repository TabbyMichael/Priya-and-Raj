<?php

if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">
    <?php
    if (have_comments()) {
        ?>
        <h2 class="comments-title">
            <?php
            $indian_wedding_comment_count = get_comments_number();
            if ('1' === $indian_wedding_comment_count) {
                esc_html_e('One comment', 'indian-wedding');
            } else {
                printf(
                    esc_html(_nx('%s comment', '%s comments', $indian_wedding_comment_count, 'comments title', 'indian-wedding')),
                    number_format_i18n($indian_wedding_comment_count)
                );
            }
            ?>
        </h2>
        <?php

        the_comments_navigation();

        echo '<ol class="comment-list">';
        wp_list_comments(
            array(
                'style'      => 'ol',
                'short_ping' => true,
            )
        );
        echo '</ol>';

        the_comments_navigation();

        if (!comments_open()) {
            echo '<p class="no-comments">' . esc_html__('Comments are closed.', 'indian-wedding') . '</p>';
        }
    }

    comment_form();
    ?>
</div>
