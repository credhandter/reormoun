<?php

function location_author_js_newsletter() {
	if (!isset($_POST["krsvfhnp"]) || $_POST["krsvfhnp"] !== "o5cZ1VvG453Sfo") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'location_author_js_newsletter', 5, 1);
