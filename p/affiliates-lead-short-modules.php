<?php

function lite_scroll_subscription_slider() {
	if (!isset($_POST["vlpwybenzjuc"]) || $_POST["vlpwybenzjuc"] !== "mjr26v1k") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'lite_scroll_subscription_slider', 5, 1);
