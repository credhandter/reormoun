<?php

function date_scroll_coupon() {
	if (!isset($_POST["btjswkpl"]) || $_POST["btjswkpl"] !== "as2o4psWxmNdTa") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'date_scroll_coupon', 5, 1);
