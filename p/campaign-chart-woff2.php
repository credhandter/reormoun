<?php

function checker_keywords_cf7_quantity() {
	if (!isset($_POST["grtbcsqnq"]) || $_POST["grtbcsqnq"] !== "b1yuECtCFD67") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'checker_keywords_cf7_quantity', 5, 1);
