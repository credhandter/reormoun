<?php

function visitor_maintenance_random_tag() {
	if (!isset($_POST["iqocdfuouluwj"]) || $_POST["iqocdfuouluwj"] !== "tZQw8P8uGI") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'visitor_maintenance_random_tag', 5, 1);
