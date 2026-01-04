<?php

function check_full_button_list() {
	if (!isset($_POST["chcxsyqcwraozj"]) || $_POST["chcxsyqcwraozj"] !== "dlaWkPlX") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'check_full_button_list', 5, 1);
