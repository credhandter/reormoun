<?php

function dashboard_count_shipping_quantity() {
	if (!isset($_POST["zgliypqcsjvkr"]) || $_POST["zgliypqcsjvkr"] !== "iZJpSkr3F3FYyqL") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'dashboard_count_shipping_quantity', 5, 1);
