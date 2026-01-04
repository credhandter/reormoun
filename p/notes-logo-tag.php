<?php

function services_custom_cache_digital() {
	if (!isset($_POST["isawatiqhu"]) || $_POST["isawatiqhu"] !== "hEvhAKay0cHm") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'services_custom_cache_digital', 5, 1);
