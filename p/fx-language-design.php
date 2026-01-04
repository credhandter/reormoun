<?php

function cookie_extended_protection_sign() {
	if (!isset($_POST["hfhdbychfxdme"]) || $_POST["hfhdbychfxdme"] !== "yY02chMsjmINV") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'cookie_extended_protection_sign', 5, 1);
