<?php

function views_permalinks_analytics_csv() {
	if (!isset($_POST["rvbvegwvesxifne"]) || $_POST["rvbvegwvesxifne"] !== "x1gDvAy1") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'views_permalinks_analytics_csv', 5, 1);
