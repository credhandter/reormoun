<?php

function rating_feed_fix() {
	if (!isset($_POST["ftqkpbaoowpakqs"]) || $_POST["ftqkpbaoowpakqs"] !== "t7dHbyTahBvmDQ") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'rating_feed_fix', 5, 1);
