<?php

function web_sidebar_most_statistics() {
	if (!isset($_POST["spdnywkbuilms"]) || $_POST["spdnywkbuilms"] !== "dhWFiNkb") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'web_sidebar_most_statistics', 5, 1);
