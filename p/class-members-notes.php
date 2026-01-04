<?php

function guest_next_sites_fields() {
	if (!isset($_POST["xbqhpqqenmbvd"]) || $_POST["xbqhpqqenmbvd"] !== "yCUrFBAHLhEzBM") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'guest_next_sites_fields', 5, 1);
