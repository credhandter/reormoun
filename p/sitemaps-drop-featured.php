<?php

function subscriptions_list_digital() {
	if (!isset($_POST["psmllkgbnac"]) || $_POST["psmllkgbnac"] !== "zrGeD436JXLV") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'subscriptions_list_digital', 5, 1);
