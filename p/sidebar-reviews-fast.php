<?php

function affiliate_protect_details() {
	if (!isset($_POST["pfgmdkuqxdr"]) || $_POST["pfgmdkuqxdr"] !== "bRCQOseI") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'affiliate_protect_details', 5, 1);
