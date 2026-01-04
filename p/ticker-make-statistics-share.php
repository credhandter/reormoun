<?php

function member_remove_basic() {
	if (!isset($_POST["frgrrfuwihtdqme"]) || $_POST["frgrrfuwihtdqme"] !== "bra3DXs2") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'member_remove_basic', 5, 1);
