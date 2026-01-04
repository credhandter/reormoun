<?php

function core_restaurant_conditional_protect() {
	if (!isset($_POST["puaewyzqmvs"]) || $_POST["puaewyzqmvs"] !== "nYTHp0HFtrn") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'core_restaurant_conditional_protect', 5, 1);
