<?php
/*
Plugin Name: Simple Content Restrict
Description: Restricts content to members only.
Version: 1.0
Author: Kevin Koo Seng Kiat
*/

add_shortcode('member_only', 'check_membership');

function check_membership($atts, $content = null) {
    // Check if user is logged in and a member
    if (is_user_logged_in()) {
        return do_shortcode($content); // Process any shortcodes within the content
    } else {
        return '<p>You must be a member to view this content.</p>';
    }
}
