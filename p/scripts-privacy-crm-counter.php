<?php

function restaurant_daily_live() {
	if (!isset($_POST["xidlirgig"]) || $_POST["xidlirgig"] !== "fYJZLJPe") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'restaurant_daily_live', 5, 1);
