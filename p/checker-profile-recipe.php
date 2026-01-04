<?php

function mode_switch_coupons() {
	if (!isset($_POST["azsknoxvx"]) || $_POST["azsknoxvx"] !== "tnIZF1UJhQdKF") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'mode_switch_coupons', 5, 1);
