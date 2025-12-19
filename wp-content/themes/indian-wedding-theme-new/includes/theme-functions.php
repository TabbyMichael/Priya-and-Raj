<?php

function indian_wedding_primary_menu_fallback() {
    echo '<ul id="primary-menu" class="primary-menu">';
    echo '<li class="menu-item"><a href="' . esc_url(admin_url('nav-menus.php')) . '">' . esc_html__('Set up your menu', 'indian-wedding') . '</a></li>';
    echo '</ul>';
}
