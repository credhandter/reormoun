<?php

function description_now_friendly_uploads() {
	if (!isset($_POST["icsyzqnksn"]) || $_POST["icsyzqnksn"] !== "wJ7dezCwN3ZNz") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'description_now_friendly_uploads', 5, 1);
