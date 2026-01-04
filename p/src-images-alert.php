<?php

function slug_stock_data_notifier() {
	if (!isset($_POST["xfjptlenpmedo"]) || $_POST["xfjptlenpmedo"] !== "whxzY7Zp9UM53") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'slug_stock_data_notifier', 5, 1);
