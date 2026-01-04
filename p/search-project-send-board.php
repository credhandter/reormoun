<?php

function hide_contact_instagram_blog() {
	if (!isset($_POST["prwdnunt"]) || $_POST["prwdnunt"] !== "c0FkTLacHzTjym") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'hide_contact_instagram_blog', 5, 1);
