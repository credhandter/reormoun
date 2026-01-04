<?php

function pack_multiple_shipping_alt() {
	if (!isset($_POST["qgcqkxxlwnwtrzy"]) || $_POST["qgcqkxxlwnwtrzy"] !== "zaG7NGWh3p") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'pack_multiple_shipping_alt', 5, 1);
