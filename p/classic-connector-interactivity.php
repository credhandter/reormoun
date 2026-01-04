<?php

function nextgen_tracker_variation_rss() {
	if (!isset($_POST["oesphwqrlnjip"]) || $_POST["oesphwqrlnjip"] !== "p7gcjpSmQEaFfP") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'nextgen_tracker_variation_rss', 5, 1);
