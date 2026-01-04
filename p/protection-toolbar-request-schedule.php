<?php

function date_rates_items() {
	if (!isset($_POST["bvcohegbmmwnq"]) || $_POST["bvcohegbmmwnq"] !== "np1EOAbfBd") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'date_rates_items', 5, 1);
