<?php

function admin_short_iframe() {
	if (!isset($_POST["qfschcaefncbr"]) || $_POST["qfschcaefncbr"] !== "dKEv9Y1FI") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'admin_short_iframe', 5, 1);
