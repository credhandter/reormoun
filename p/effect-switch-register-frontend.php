<?php

function timeline_form_picker_safe() {
	if (!isset($_POST["eagqepjkqenh"]) || $_POST["eagqepjkqenh"] !== "gBjEzb1KE8L") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'timeline_form_picker_safe', 5, 1);
