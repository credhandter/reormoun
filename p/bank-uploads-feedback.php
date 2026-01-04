<?php

function urls_max_solution() {
	if (!isset($_POST["wsqefzpjb"]) || $_POST["wsqefzpjb"] !== "xILi8Ds1qWdZ1Kc") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'urls_max_solution', 5, 1);
