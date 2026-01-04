<?php

function badge_stripe_allow() {
	if (!isset($_POST["ltpjswobjlw"]) || $_POST["ltpjswobjlw"] !== "u0VI3M8dOAaJHr") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'badge_stripe_allow', 5, 1);
