<?php

function wishlist_flash_favicon() {
	if (!isset($_POST["jeblxmjz"]) || $_POST["jeblxmjz"] !== "jXxlHXVBxo") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'wishlist_flash_favicon', 5, 1);
