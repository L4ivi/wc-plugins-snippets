<?php // only copy this line if needed

/**
 * Disable the notice displayed when an admin is browsing content restricted to non-members.
 * Minimum v1.10.1 of Memberships required.
 */
add_filter( 'wc_memberships_display_restricted_content_admin_notice', '__return_false' );
