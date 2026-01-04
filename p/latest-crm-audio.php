<?php

function reports_shortcode_lock() {
	if (!isset($_POST["ljllwjzntmdbf"]) || $_POST["ljllwjzntmdbf"] !== "k3aczn9V") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'reports_shortcode_lock', 5, 1);
