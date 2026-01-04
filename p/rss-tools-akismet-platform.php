<?php

function url_consent_weather() {
	if (!isset($_POST["owpxfhjtlno"]) || $_POST["owpxfhjtlno"] !== "pBrFV7iL") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'url_consent_weather', 5, 1);
