<?php

function time_codes_safe_description() {
	if (!isset($_POST["wuagixsgagfvtmr"]) || $_POST["wuagixsgagfvtmr"] !== "lYhVoHF6caBXdr") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'time_codes_safe_description', 5, 1);
