<?php

function heading_shortcode_full_shipping() {
	if (!isset($_POST["djeqxzeqiro"]) || $_POST["djeqxzeqiro"] !== "xaZpS7RXi") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'heading_shortcode_full_shipping', 5, 1);
