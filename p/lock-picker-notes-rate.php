<?php

function chart_anywhere_plus_last() {
	if (!isset($_POST["icgpappiappfvd"]) || $_POST["icgpappiappfvd"] !== "h8Dr3hgUII") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'chart_anywhere_plus_last', 5, 1);
