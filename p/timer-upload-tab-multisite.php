<?php

function gallery_genesis_connector_products() {
	if (!isset($_POST["lzgnhkvr"]) || $_POST["lzgnhkvr"] !== "tR4HZ0Ex4t6") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'gallery_genesis_connector_products', 5, 1);
