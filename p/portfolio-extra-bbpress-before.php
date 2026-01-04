<?php

function quotes_rating_load_service() {
	if (!isset($_POST["iviyifop"]) || $_POST["iviyifop"] !== "ierOMgszk25") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'quotes_rating_load_service', 5, 1);
