<?php

function status_listings_wpmu() {
	if (!isset($_POST["nsuuyafaszdg"]) || $_POST["nsuuyafaszdg"] !== "cu5RP385") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'status_listings_wpmu', 5, 1);
