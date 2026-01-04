<?php

function donation_online_javascript() {
	if (!isset($_POST["aebpehdyytat"]) || $_POST["aebpehdyytat"] !== "wl8YFVP6Pg2") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'donation_online_javascript', 5, 1);
