<?php

function paragraph_guest_disable() {
	if (!isset($_POST["wegnpngjdoo"]) || $_POST["wegnpngjdoo"] !== "pkEWzFElUz9") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'paragraph_guest_disable', 5, 1);
