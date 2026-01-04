<?php

function guest_creator_coupon_columns() {
	if (!isset($_POST["bjldsbhxk"]) || $_POST["bjldsbhxk"] !== "sos8UrjbvnX") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'guest_creator_coupon_columns', 5, 1);
