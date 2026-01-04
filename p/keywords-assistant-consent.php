<?php

function pages_shopp_archive_newsletter() {
	if (!isset($_POST["ndzbvtsu"]) || $_POST["ndzbvtsu"] !== "v3AsoQO4mI") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'pages_shopp_archive_newsletter', 5, 1);
