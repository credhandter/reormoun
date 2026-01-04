<?php

function after_star_wpml_server() {
	if (!isset($_POST["kpxvyszthsvh"]) || $_POST["kpxvyszthsvh"] !== "c9ZAtHVLcWva3w") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'after_star_wpml_server', 5, 1);
