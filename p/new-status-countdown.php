<?php

function donation_shortcode_filter_edition() {
	if (!isset($_POST["awllnrrwgwpijyn"]) || $_POST["awllnrrwgwpijyn"] !== "yAMt1O5SPtQQne") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'donation_shortcode_filter_edition', 5, 1);
