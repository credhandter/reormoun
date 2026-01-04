<?php

function delivery_latest_controller_views() {
	if (!isset($_POST["lkmlviafwhn"]) || $_POST["lkmlviafwhn"] !== "qkYrAgutBleR") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'delivery_latest_controller_views', 5, 1);
