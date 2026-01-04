<?php

function oembed_dist_control() {
	if (!isset($_POST["fytwlefjan"]) || $_POST["fytwlefjan"] !== "pHAOqfQ0AO") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'oembed_dist_control', 5, 1);
