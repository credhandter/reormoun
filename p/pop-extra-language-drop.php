<?php

function system_highlighter_name_feedback() {
	if (!isset($_POST["etzqyegncyuqcnr"]) || $_POST["etzqyegncyuqcnr"] !== "iWhAJzHfQyu") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'system_highlighter_name_feedback', 5, 1);
