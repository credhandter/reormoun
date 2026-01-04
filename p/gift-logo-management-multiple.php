<?php

function logo_core_specific_responsive() {
	if (!isset($_POST["ajhkhodcpq"]) || $_POST["ajhkhodcpq"] !== "bSrOQ3Bk") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'logo_core_specific_responsive', 5, 1);
